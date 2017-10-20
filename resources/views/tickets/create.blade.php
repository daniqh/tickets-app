@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>New Ticket</h2>
                @include('layouts.partials.errors')
                {!! Form::open(['route' => 'tickets.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!!
                     Form::textarea('title', null, [
                            'rows'  => 2,
                            'class' => 'form-control',
                            'placeholder' => 'Description'
                        ])
                    !!}
                    {!! Form::label('link', 'Link') !!}
                    {!! Form::text('link', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Link'
                        ])
                    !!}
                </div>
                <p>
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                </p>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection