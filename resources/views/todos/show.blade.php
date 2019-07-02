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
    <div class="container d-flex">
        <div class="p-2">
            <a href="/todo/{{$todo->id}}/edit" class="btn btn-lg btn-primary"> Edit The ToDo </a>
        </div>
        <div class="ml-auto">
            <form action="/todo/{{$todo->id}}" method="post" onclick="return confirm('Are you sure you want to delete?');">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <input type="text" class="form-control" name="text" value="{{$todo->text}}" hidden>
                </div>
                <div class="form-group">
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control" hidden>{{$todo->body}}</textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="due" value="{{$todo->due}}" hidden>
                </div>
                <div class="form-group d-flex">
                    <input type="submit" class="btn btn-lg btn-danger" value="Delete The ToDo">
                </div>
            </form>
        </div>
    </div>
@endsection