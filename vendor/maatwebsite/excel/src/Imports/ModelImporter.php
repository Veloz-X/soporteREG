<?php

namespace Maatwebsite\Excel\Imports;

use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Row;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ModelImporter
{
    /**
     * @var ModelManager
     */
    private $manager;

    /**
     * @param ModelManager $manager
     */
    public function __construct(ModelManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param Worksheet $worksheet
     * @param ToModel   $import
     * @param int|null  $startRow
     */
    public function import(Worksheet $worksheet, ToModel $import, int $startRow = 1)
    {
        $headingRow = HeadingRowExtractor::extract($worksheet, $import);
        $batchSize  = $import instanceof WithBatchInserts ? $import->batchSize() : 1;
        $endRow     = EndRowFinder::find($import, $startRow);
        $progessBar = $import instanceof WithProgressBar;

        $i = 0;
        foreach ($worksheet->getRowIterator($startRow, $endRow) as $spreadSheetRow) {
            $i++;

            $row = new Row($spreadSheetRow, $headingRow);
            if (!$import instanceof SkipsEmptyRows || ($import instanceof SkipsEmptyRows && !$row->isEmpty())) {
                $rowArray = $row->toArray(null, $import instanceof WithCalculatedFormulas);

                if ($import instanceof WithMapping) {
                    $rowArray = $import->map($rowArray);
                }

                $this->manager->add(
                    $row->getIndex(),
                    $rowArray
                );

                // Flush each batch.
                if (($i % $batchSize) === 0) {
                    $this->manager->flush($import, $batchSize > 1);
                    $i = 0;

                    if ($progessBar) {
                        $import->getConsoleOutput()->progressAdvance($batchSize);
                    }
                } elseif ($progessBar) {
                    $import->getConsoleOutput()->progressAdvance();
                }
            }
        }

        // Flush left-overs.
        $this->manager->flush($import, $batchSize > 1);
    }
}
