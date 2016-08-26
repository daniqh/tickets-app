<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Entity
{
    protected $fillable = ['title', 'status'];

    public function author()
    {
        return $this->belongsTo(User::getClass(), 'user_id');
    }

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
