<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketVote extends Entity
{
    public function ticket()
    {
        return $this->belongsTo(Ticket::getClass());
    }
    public function user()
    {
        return $this->belongsTo(User::getClass());
    }
}
