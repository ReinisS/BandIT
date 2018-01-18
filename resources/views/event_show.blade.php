@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $event->name }} </h1>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <a href="{{ url('event', $event['id']) }}" class="gal">
                            <img class="img-thumbnail" src="../uploads/placeholder.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <h4>
                            <p>Event type:
                            @if ($event->public === 1)
                                Public
                            @else
                                Private
                            @endif
                            </p>
                            <p>{{ $event->date }}</p>
                            <p>{{ $event->place }}</p>
                            <p>{{ $event->description }}</p>
                        </h4>
                    </div>
                </div>
                <div class="panel-body">
                    <h3><a href="{{ url('event/delete', $event->id) }}">Delete event</a></h3>
                </div>
                <div class="panel-body">
                @if ($bands->count() > 0)
                    <div><h3>Bands participating in this event:</h3></div>
                    @foreach ($bands as $band)
                        <div class="panel-body">
                            <a href="{{ url('band', $band['id']) }}">{{ $band->name }}</a>
                        </div>
                    @endforeach
                @else
                    <div>There are no bands for this event!</div>
                @endif
                </div>
                <div class="panel-body">
                    <div><h3>Comments:</h3></div>
                    <div>
                        @if (count($comments) > 0)
                            @foreach ($comments as $c)
                                <div class="panel-body">
                                    <b>{{ $c['user_name'] }}: </b>
                                    {{ $c['content'] }}
                                    <br><i>{{ $c['created_at'] }}</i>
                                    <hr>
                                </div>
                            @endforeach
                        @else
                            <div>There are no comments for this event!</div>
                        @endif
                    </div>
                </div>
                <div class="panel-body">
                    <h3>Add comment:</h3>
                    {!! Form::open(['action' => array('EventController@comment', $event->id), 'class' => 'form-horizontal']) !!}
                    
                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    {!! Form::label('content', 'Message', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('content', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('content'))
                        <span class="help-block">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif                      
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                    {!! Form::submit('Comment', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection