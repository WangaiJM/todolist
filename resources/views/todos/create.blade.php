@extends('layouts.app')

@section('content')
    
    <form action="/todo" method="post">
        @csrf
        <div class="form-group">
            <label for="Text"> Text</label>
            <input type="text" class="form-control" name="text">
        </div>
        <div class="form-group">
            <label for="Body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="Text"> Due</label>
            <input type="text" class="form-control" name="due">
        </div>
        <div class="form-group d-flex">
            <input type="submit" class="btn btn-lg btn-primary ml-auto" value="Create a To Do">
        </div>
    </form>

@endsection