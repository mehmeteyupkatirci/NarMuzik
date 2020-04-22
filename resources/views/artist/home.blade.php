@extends('layouts.master')
@section('content')
     <!--Main Content Wrap Start-->
     <div class="kode_content_wrap">
        <section>
            <div class="container">
                <div class="mp3-list-wrap">
                    <div class="heading-2">
                        <h5>{{ trans('artist-home.page') }}</h5>
                    </div>
                    <!--Mp3 List Table Start-->
                    <ul class="mp3-list-table">
                        <li class="list-header">
                            <div class="mp3-title"><h6>{{ trans('artist-home.name') }}</h6></div>
                            <div class="artists"><h6>{{ trans('artist-home.genres') }}</h6></div>
                            <div class="remixers"><h6>{{ trans('artist-home.popularity') }}</h6></div>
                            <div class="mp3-label"><h6>{{ trans('artist-home.created_at') }}</h6></div>
                            <div class="genre"><h6>{{ trans('artist-home.updated_at') }}</h6></div>
                            <div class="key"><h6></h6></div>
                            <div class="released"><h6></h6></div>
                        </li>
                        <!--Mp3 List Thumb Start-->
                        @if($artists)                        
                            @foreach ($artists as $artist)
                            <li>
                                <div class="mp3-title">
                                    <div class="mp3-playlist-item-cover">
                                        <span class="img-holder">
                                            <img src="extra-images\mp3cover1.png" alt="">
                                        </span>
                                    </div>
                                    <div class="text-overflow">
                                        <a class="mp3-icon" href="{{route ('artist_detail',$artist->id)}}"><i class="icon-play-button"></i></a>
                                        <a class="mp3-icon" href="{{route ('artist_detail',$artist->id)}}"><i class="icon-music-1"></i></a>
                                        <h6><a href="{{route ('artist_detail',$artist->id)}}">{{$artist->name}}</a></h6>
                                    </div>
                                </div>
                                <div class="artists"><h6><b>{{$artist->genres}}</b></h6></div>
                                <div class="remixers"><h6><b>{{$artist->popularity}}</b></h6></div>
                                <div class="mp3-label"><h6>{{$artist->created_at}}</h6></div>
                                <div class="genre"><h6>{{$artist->updated_at}}</h6></div>
                                <div class="key"><h6></h6></div>
                                <div class="released"><h6></h6></div>
                            </li>
                            
                            @endforeach
                        
                        @endif
                    </ul>
                <!--Pagination Wrap Start-->
                {{$artists->links()}}
                
                <!--Pagination Wrap End-->
            </div>
        </section>
    
@endsection