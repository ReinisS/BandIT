@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $event->name }} attendance for {{ $band->name }}</h1>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <a href="{{ url('event', $event['id']) }}" class="gal">
                            <img class="img-thumbnail" src="/uploads/placeholder.jpg" alt="">
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
                    <div><h2>Attendance:</h2></div>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="panel panel-default">
                    @if (count($attendances) > 0)
                        <div class="panel-body">
                            <div class="col-md-2 text-center"></div>
                            <div class="col-md-2 text-center">Unknown</div>
                            <div class="col-md-2 text-center">Attending</div>
                            <div class="col-md-2 text-center">Maybe</div>
                            <div class="col-md-2 text-center">Not attending</div>
                            <div class="col-md-2 text-center">Submit</div>
                        </div>
                        
                        @foreach ($attendances as $a)
                        <div class="panel-body">
                            @if ($a['user_id'] === Auth::user()->id)
                                <div>
                                {!! Form::open(['action' => array('BandController@updateattendance', $band->id, $event->id), 'class' => 'form-horizontal']) !!}
                                <div class="col-md-2 text-right">{{ $a['user_name'] }}</div>
                                @for ($i = 0; $i < 4; $i++)
                                    @if ($i === $a['attendance'])
                                        <div class="col-md-2 text-center">
                                            {{ Form::radio('attendance[]', $i, true) }}
                                        </div>
                                    @else
                                        <div class="col-md-2 text-center">
                                            {{ Form::radio('attendance[]', $i) }}
                                        </div>
                                    @endif
                                @endfor
                                {!! Form::submit('Update', ['class' => 'btn btn-primary btn-sm col-md-2']) !!}
                                </div>
                            @else
                                <div>
                                <div class="col-md-2 text-right">{{ $a['user_name'] }}</div>
                                @for ($i = 0; $i < 4; $i++)
                                    @if ($i === $a['attendance'])
                                        <div class="col-md-2 text-center">&#10004;</div>
                                    @else
                                        <div class="col-md-2 text-center">&nbsp;</div>
                                    @endif
                                @endfor
                                <div class="col-md-2 text-center">&nbsp;</div>
                                </div>
                            @endif
                            
                        </div>
                        @endforeach
                    @else
                        <div>No attendances!</div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection