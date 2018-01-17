@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $band->name }}</h4>
                </div>

                <div class="panel-body">
                    <div class="col-md-6">
                    <img class="img-thumbnail" width="300" src="../uploads/placeholder.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                    <div><h4>Description: {{ $band->description }}</h4></div>
                    <div><i>Private information: 
                        @if ($showprivate === true)
                        {{ $band->privateinfo }}
                        @else
                        You do not have permission to view private information for this band!
                        @endif
                        </i>
                    </div>
                    </div>
                    <div class="clearfix">
                        <!--<h2><a href='{{ url("band/edit", $band->id) }}'>Edit</a></h2>-->
                    </div>
                    <hr>
                    <div>
                        <h2>Events for this band:</h2>
                        @if ($events->count() > 0)
                            @foreach ($events as $event)
                                <div class="panel-body">
                                    <div class="col-md-4">
                                        <a href="{{ url('event', $event['id']) }}" class="gal">
                                            <img class="img-thumbnail" src="../uploads/placeholder.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3><a href="{{ url('event', $event['id']) }}">{{ $event->name }}</a></h3>
                                        <h4>
                                            <div>Event type:
                                            @if ($event->public === 1)
                                                Public
                                            @else
                                                Private
                                            @endif
                                            </div>
                                            <div>{{ $event->date }}</div>
                                            <div>{{ $event->place }}</div>
                                            <div>{{ $event->description }}</div>
                                            <br>
                                            <div><a href="{{ action('BandController@attendance', ['band_id' => $band->id, 'event_id' => $event->id]) }}">Attendance</a></div>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div>There are no events for this band!</div>
                        @endif
                    </div>
                    <div>
                        <h2><a href='{{ url("event/create") }}'>Create new event</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection