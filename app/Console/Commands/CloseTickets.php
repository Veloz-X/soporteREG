<?php

namespace App\Console\Commands;

use App\Ticket;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CloseTickets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ticket:closeOldTickets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Close tickets older then 1 month';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get tickets with that hasn't a reply for more then 15 days from the customer that have the status Open or sovled
        $tickets = DB::table('tickets')
            ->select('tickets.id')
            ->whereIn('status', ['open','solved'])
            ->join('ticket_conversation', function($q){
                $d = Carbon::now()->subDays(15)->toDateString();
                $q->on('tickets.id', '=', 'ticket_conversation.ticket_id')
                ->where('ticket_conversation.created_at', '<=', $d)
                ->where('ticket_conversation.user_id', '!=', 'tickets.user_id')
                ->whereRaw('ticket_conversation.id IN (select MAX(a2.id) from ticket_conversation as a2 join tickets as u2 on u2.id = a2.ticket_id group by u2.id)');
            })
            ->get();
    
        if($tickets){
            DB::table('tickets')->whereIn('id', $tickets->pluck('id'))->update(['status' => 'closed']); 
        }
       
    }
}
