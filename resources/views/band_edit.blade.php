@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new band</div>
                <div class="panel-body">
                    {!! Form::model($band, array('action' => 'BandController@store', 'class' => 'form-horizontal', $band->id)) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Band name', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
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
                    
                    <div class="form-group{{ $errors->has('privateinfo') ? ' has-error' : '' }}">
                    {!! Form::label('privateinfo', 'Band private information', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('privateinfo', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('privateinfo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('privateinfo') }}</strong>
                        </span>
                    @endif                      
                    </div>
                    </div>
                    
                    <div class="form-group">
                    {!! Form::label('manager', 'Manager(s)', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    @foreach ($users as $user)
                    <div>
                    {{ Form::checkbox('manager[]', $user['id']) }}
                    {{ $user['name'] }}
                    </div>
                    @endforeach
                    @if ($errors->has('manager'))
                        <span class="help-block">
                            <strong>{{ $errors->first('manager') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    
                    <div class="form-group">
                    {!! Form::label('users', 'User(s)', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    @foreach ($users as $user)
                    <p>
                    {{ Form::checkbox('user[]', $user['id']) }}
                    {{ $user['name'] }}
                    </p>
                    @endforeach
                    <div><i>You will automatically be set as a user in this band.</i></div>
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
