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
            </div>
        </div>
    </div>
</div>
@endsection