<?php
namespace App\Components;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder{

    public function menu($items)
    {
        if (! is_array($items)){
            $items=config($items, array() );
        }
        return view('layouts.partials.menu',compact('items'));
    }

}