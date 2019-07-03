@extends('layouts.app')

@section('content')
    
    <form action="/todo/{{$todo->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Text"> Text</label>
            <input type="text" class="form-control" name="text" value="{{$todo->text}}">
        </div>
        <div class="form-group">
            <label for="Body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$todo->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="Text"> Due</label>
            <input type="text" class="form-control" name="due" value="{{$todo->due}}">
        </div>
        <div class="form-group d-flex">
            <input type="submit" class="btn btn-lg btn-primary ml-auto" value="Edit The ToDo">
        </div>
    </form>

@endsection