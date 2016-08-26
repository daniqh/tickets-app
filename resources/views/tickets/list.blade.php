@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <h1>
                        Tickets List
                        <a href="{{ route('tickets.create') }}" class="btn btn-primary">
                           Add ticket
                        </a>
                    </h1>

                    <p class="label label-info news">
                       There are {{ $tickets->total() }} Tickets
                    </p>

                    @foreach($tickets as $ticket)
                        @include('tickets.partials.item', compact('ticket'))
                    @endforeach

                    {!! $tickets->render() !!}

                </div>

                <hr>

                <p><a href="http://danielqh.com" target="_blank">danielqh.com</a></p>

            </div>
        </div>
    </div>

@endsection