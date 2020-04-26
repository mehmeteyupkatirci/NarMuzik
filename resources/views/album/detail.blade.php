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
        <div class="col-md-4 col-sm-6"> </div>
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
        <div class="mp3-list-wrap">
            <div class="heading-2">
                <h5>{{ trans('track-home.page') }}</h5>
            </div>
            <!--Mp3 List Table Start-->
            <ul class="mp3-list-table">
                <li class="list-header">
                    <div class="mp3-title"><h6>{{ trans('track-home.name') }}</h6></div>
                    <div class="tracks"><h6>{{ trans('track-home.genres') }}</h6></div>
                    <div class="remixers"><h6>{{ trans('track-home.album') }}</h6></div>
                    <div class="mp3-label"><h6>{{ trans('track-home.popularity') }}</h6></div>
                    <div class="genre"><h6>{{ trans('track-home.lenght') }}</h6></div>
                    <div class="key"><h6>{{ trans('track-home.number') }}</h6></div>
                    <div class="released"><h6></h6></div>
                </li>
                <!--Mp3 List Thumb Start-->
                @if($albums->tracks)
                @foreach($albums->tracks as $track)
                    <li>
                        <div class="mp3-title">
                            <div class="mp3-playlist-item-cover">
                                <span class="img-holder">
                                    <img src="\extra-images\mp3cover1.png" alt="">
                                </span>
                            </div>
                            <div class="text-overflow">
                                <a class="mp3-icon" href="{{route ('track_detail',$track->id)}}"><i class="icon-play-button"></i></a>
                                <a class="mp3-icon" href="{{route ('track_detail',$track->id)}}"><i class="icon-music-1"></i></a>
                                <h6><a href="{{route ('track_detail',$track->id)}}">{{$track->name}}</a></h6>
                            </div>
                        </div>
                        <div class="tracks"><h6><b>{{$track->album->genres}}</b></h6></div>
                        <div class="remixers"><h6><b>{{$track->album->name}}</b></h6></div>
                        <div class="mp3-label"><h6>{{$track->popularity}}</h6></div>
                        <div class="genre"><h6>{{$track->duration_ms}}</h6></div>
                        <div class="key"><h6>{{$track->disc_number}}</h6></div>
                        <div class="released"><h6></h6></div>
                    </li>
                    @endforeach
                @endif
                </ul>
            </div>
    </div>
</div>
</section>
@endsection