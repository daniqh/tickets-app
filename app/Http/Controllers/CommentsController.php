<?php

namespace App\Http\Controllers;

use App\Entities\Ticket;
use App\Entities\TicketComments;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Requests;

class CommentsController extends Controller
{
    public function submit($id,Request $request, Guard $auth)
    {

        $this->validate($request,[
            'comment'=>'required|max:250',
            'link'=>'url'
        ]);

        $comment=new TicketComments($request->all());
        //Inyeción de dependencias para pillar el id del usuario
        $comment->user_id=$auth->id();
        //pillar el id del ticket por la url (reflection)

        $ticket=Ticket::findOrFail($id);
        //Lo hacemos así para sacar el id automaticamente mediante la relación
        $ticket->comments()->save($comment);

        session()->flash('sucess','Your comment has been saved.');

        return redirect()->back();

    }
}
