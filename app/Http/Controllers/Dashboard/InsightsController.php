<?php

namespace App\Http\Controllers\Dashboard;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InsightsController extends Controller
{
    public function ticketsOverview()
    {
        $select = [
            DB::raw("IFNULL(SUM(status = 'open'), 0) AS open"),
            DB::raw("IFNULL(SUM(status = 'solved'), 0) AS solved"),
            DB::raw("IFNULL(SUM(status = 'closed'), 0) AS closed"),
            DB::raw('count(*) as total')
        ];


        $tickets = Ticket::select($select);
        
        if(Auth::User()->can('view_all_insights')){
            $tickets->withoutGlobalScope('own_ticket');
        }

        return $tickets->first();
    }

   
}
