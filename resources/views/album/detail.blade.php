@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h2>{{$albums->name}} Detail</h2>
        <br>
        <div class="col-md-4 col-sm-6">
            <div class="msl-blog-full blog-small">
                <figure>
                    <img src="\extra-images\masonry-blog5.jpg" alt="KODEFOREST">
                    <span class="editor-label">ARTIST</span>
                </figure>
                <div class="text">
                    <h5 class="blog-title"><a href="{{route ('artist_detail',$albums->artist_id)}}">{{$albums->artist->name}}</a></h5>
                    <p> Genres : {{$albums->artist->genres}} <br/>
                        Popularity : 100 % {{$albums->artist->popularity}}<br/>
                        Relaese Date : {{$albums->created_at}}<br/>
                    </p>
                    <a class="btn-1" href="{{route ('artist_detail',$albums->artist_id)}}">Show More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6"></div>
        <div class="col-md-4 col-sm-6">
            <div class="msl-blog-full blog-small">
                <figure>
                    <img src="\extra-images\product-img02.jpg" alt="KODEFOREST">
                    <span class="editor-label">ALBUM</span>
                </figure>
                <div class="text">
                    <h5 class="blog-title"><a href="{{route ('artist_detail',$albums->artist_id)}}">{{$albums->name}}</a></h5>
                    <p> Genres : {{$albums->genres}} <br/>
                        Copytrights : {{$albums->copytrights}}<br/>
                        Popularity : 100 % {{$albums->popularity}}<br/>
                        Relaese Date : {{$albums->release_date}}<br/>
                    </p>
                </div>
            </div>
        </div>
@endsection