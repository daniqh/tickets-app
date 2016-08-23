<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Entity
{
    public function comments()
    {
        return $this->hasMany(TicketComments::getClass());
    }

    public function getOpenAttribute()
    {
        return $this->status=='open';
    }

    public function voters()
    {
        return $this->belongsToMany(User::getClass(),'ticket_votes');
    }
}
