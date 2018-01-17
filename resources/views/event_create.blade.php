@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new event</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'EventController@store', 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Event name', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif    
                    </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    {!! Form::label('date', 'Date', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::date('date', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('ate'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ate') }}</strong>
                        </span>
                    @endif                      
                    </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                    {!! Form::label('place', 'Place', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('place', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('place'))
                        <span class="help-block">
                            <strong>{{ $errors->first('place') }}</strong>
                        </span>
                    @endif    
                    </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('description', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif                      
                    </div>
                    </div>
                    
                    <div class="form-group">
                    {!! Form::label('public', 'Set event as public?', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {{ Form::checkbox('public', 1) }}
                    </div>
                    </div>
                    
                    <div class="form-group">
                    {!! Form::label('bands', 'Band(s)', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    @foreach ($bands as $band)
                    <p>
                    {{ Form::checkbox('band[]', $band['id']) }}
                    {{ $band['name'] }}
                    </p>
                    @endforeach
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
