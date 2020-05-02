@extends('layouts.master')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
<div class="row">
    <div class="col-md-6">
        <h1>H1 kısmı</h1>
    </div>
    <div class="col-md-6 text-right">
    <a href="{{action ('Playlists@create')}}" class="btn btn-primary">Add Data</a>
    </div>

<table class="table table-bordered">
   <thead>
    <tr>
       <th>No</th>
       <th>Name</th>
       <th>Description</th>
       <th>Action</th>
    </tr>
   </thead>
   <tbody>
       @foreach ($playlists as $playlist)
           <tr>
               <td>{{$playlist->id }}</td>
               <td>{{$playlist->name}}</td>
               <td>{{$playlist->description}}</td>
               <td>
                <form action="{{ action('Playlists@destroy', $playlist->id)}}" method="POST">
                    @csrf
                @method('DELETE')
                <a href="{{ action('Playlists@show', $playlist->id)}}" class="btn btn-info">SHOW</a>
                <a href="{{ action('Playlists@edit', $playlist->id)}}" class="btn btn-warning">EDIT</a>
                <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
               </td>
           </tr>
       @endforeach
   </tbody>
</table>
</div>
</div>
@endsection