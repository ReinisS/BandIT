@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administrator Panel</div>
                <div class="panel-body">
                    @if(session()->has('message'))
                        {{ session()->get('message') }}
                    @endif                    
                    <ul class="list">
                       <li><a href="{{ url('band/create') }}">Add a new band and members to it</a></li>
                       <li><a href="{{ url('event/create') }}">Add a new event and band(s) to it</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection