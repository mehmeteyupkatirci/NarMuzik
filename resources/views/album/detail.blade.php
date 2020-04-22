@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h2>{{$albums->name}} {{ trans('album-detail.page') }}</h2>
        <br>
        <div class="col-md-4 col-sm-6">
            <div class="msl-blog-full blog-small">
                <figure>
                    <img src="\extra-images\masonry-blog5.jpg" alt="KODEFOREST">
                    <span class="editor-label">{{ trans('album-detail.artist') }}</span>
                </figure>
                <div class="text">
                    <h5 class="blog-title"><a href="{{route ('artist_detail',$albums->artist_id)}}">{{$albums->artist->name}}</a></h5>
                    <p> {{ trans('album-detail.genres') }} : {{$albums->artist->genres}} <br/>
                        {{ trans('album-detail.popularity') }} : 100 % {{$albums->artist->popularity}}<br/>
                        {{ trans('album-detail.release') }} : {{$albums->created_at}}<br/>
                    </p>
                    <a class="btn-1" href="{{route ('artist_detail',$albums->artist_id)}}">{{ trans('album-detail.show') }}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6"></div>
        <div class="col-md-4 col-sm-6">
            <div class="msl-blog-full blog-small">
                <figure>
                    <img src="\extra-images\product-img02.jpg" alt="KODEFOREST">
                    <span class="editor-label">{{ trans('album-detail.album') }}</span>
                </figure>
                <div class="text">
                    <h5 class="blog-title"><a href="{{route ('artist_detail',$albums->artist_id)}}">{{$albums->name}}</a></h5>
                    <p> {{ trans('album-detail.genres') }} : {{$albums->genres}} <br/>
                        {{ trans('album-detail.copyrights') }} : {{$albums->copytrights}}<br/>
                        {{ trans('album-detail.popularity') }} : 100 % {{$albums->popularity}}<br/>
                        {{ trans('album-detail.release') }} : {{$albums->release_date}}<br/>
                    </p>
                </div>
            </div>
        </div>
@endsection