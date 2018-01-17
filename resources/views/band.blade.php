@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{$title}}</h4></div>
                    <div class="panel-body">
                        @if (count($bands) === 0)
                        <div class="alert alert-warning">
                            <p class="has-warning">There are no bands!</p>
                        </div>
                        @else
                            @foreach ( $bands as $band )
                            <div class="list-item-with-icon row">
                                <div class="col-md-4">
                                    <img class="img-thumbnail gal" src="../uploads/placeholder.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="{{ url('band', $band['id']) }}"> {{ $band->name }}</a></h2>
                                    <div><h4>Description: {{ $band->description }}</h4></div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                    </div>
                <div class="panel-body"><h1><a href="{{ url('band/create') }}"> Create a new band</a></h1></div>
            </div>
        </div>
    </div>
</div>
@endsection