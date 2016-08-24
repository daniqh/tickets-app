<?php

namespace App\Http\Controllers;

use App\Entities\Ticket;
use App\Entities\TicketComments;
use App\Http\Requests;


class TicketsController extends Controller
{
    public function latest()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate(20);

        return view('tickets/list',compact('tickets'));
    }
    public function popular()
    {
        return view('tickets/list');
    }

    public function open()
    {
        $tickets = Ticket::where('status', 'open')->orderBy('created_at', 'DESC')->paginate(20);
        return view('tickets/list', compact('tickets'));
    }

    public function closed()
    {
        $tickets = Ticket::where('status', 'closed')->orderBy('created_at', 'DESC')->paginate(20);
        return view('tickets/list', compact('tickets'));
    }

    public function details($id)
    {
        $ticket=Ticket::findOrFail($id);
        return view('tickets/details',compact('ticket'));
    }
}
