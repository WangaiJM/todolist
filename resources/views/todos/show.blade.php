@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-default">Go Back</a>
    <hr>
    <h1>{{ $todo -> text }}</h1>
    <div class="badge badge-danger">{{$todo -> due }}</div>
    <hr>
    <p>
        {{$todo->body}}
    </p>

@endsection