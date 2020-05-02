@extends('layouts.master')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
            @endif
            @foreach ($playlist as $item)
            <form action="{{ action('Playlists@update',$item->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label >Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" value="{{$item->name}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" type="text" name="description" id="" placeholder="Description" value="{{$item->description}}"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="public" type="checkbox" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Is the playlist public?
                </label>
            </div>
            <button class="btn btn-danger" type="submit">Update</button>
            <a href="{{ action('Playlists@index')}}" class="btn btn-default">Back</a>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection