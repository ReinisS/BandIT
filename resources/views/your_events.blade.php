@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{$title}}</h4></div>

                <div class="panel-body">
                    @if (count($events) === 0)
                        <div class="alert alert-warning">
                            <p class="has-warning">You haven't been added to any event yet!</p>
                        </div>
                    @else
                    <div class="panel-group">
                        @foreach ($events as $event)
                        <div class="panel-default">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <a href="{{ url('event', $event['id']) }}" class="gal">
                                        <img class="img-thumbnail" src="uploads/placeholder.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <a href="{{ url('event', $event['id']) }}"><h1>{{ $event->name }}</h1></a>
                                    <h4><p>{{ $event->date }}</p>
                                        <p>{{ $event->place }}</p>
                                        <p>{{ $event->description }}</p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <div class="panel-group">
                        <h2><a href='{{ url("event/create") }}'>Create new event</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
