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
        <form action="{{ action('Playlists@store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label >Name</label>
                <input class="form-control" type="text" name="name"  placeholder="Name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" type="text" name="description" placeholder="Description"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="public" type="checkbox" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Is the playlist public?
                </label>
              </div>
            <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection