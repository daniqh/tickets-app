<?php

namespace App\Http\Controllers;

class TicketsController extends Controller
{
    public function latest()
    {
        return view('tickets/list');
    }
    public function popular()
    {
        return view('tickets/list');
    }

    public function open()
    {
        return view('tickets/list');
    }

    public function close()
    {
        return view('tickets/list');
    }

    public function details($id)
    {
        return view('tickets/details');
    }
}
