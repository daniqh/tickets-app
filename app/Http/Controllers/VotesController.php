<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Entities\TicketVote;
use App\Entities\Ticket;
use Illuminate\Support\Facades\Auth;

class VotesController extends Controller
{
    public function submit($id)
    {
        $ticket = Ticket::findOrFail($id);
        auth()->user()->vote($ticket);
        return redirect()->back();
    }
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        auth()->user()->unvote($ticket);
        return redirect()->back();
    }

}

