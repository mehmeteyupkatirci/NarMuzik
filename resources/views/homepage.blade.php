@extends('layouts.master')
@section('content')
			<div class="count-particles">
			  <span class="js-count-particles">--</span> particles
			</div>
            <div class="simple-banner">
                <div class="slide">
                    <div id="particles-js" class="overlay"></div>
                    <div class="banner_content container">
                        <div class="b_title animated">{{ trans('homepage.title') }}</div>
                        <p class="animated">{{ trans('homepage.banner') }}</p>
                        <a href="/artists" class="btn_normal border_btn animated">{{ trans('homepage.buton1') }}</a>
                        <a href="/albums" class="btn_normal border_btn animated ">{{ trans('homepage.button2') }}</a>
                    </div>
                </div>
            </div>
            <section>
                <div class="kode_upcoming_event">
                    <div class="container">
                        <div class="heading_ho2">
                            <h3>{{ trans('homepage.top') }}</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                @if($tracks ?? '')
                                    @foreach ($tracks ?? '' as $track)
                                        <div class="kode_event">
                                        <div class="kode_event_date"><h3>{{$track->popularity}}<small>%100</small></h3></div>
                                            <div class="kode_event_content">
                                                <h4><a href="#">{{$track->name}}</a></h4>
                                                <small>{{$track->genres}}</small>
                                                <a href="{{route ('track_detail',$track->id)}}" class="btn_normal bk_border_btn active">{{ trans('homepage.show') }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                @if($albums ?? '')
                                    @foreach ($albums ?? '' as $album)
                                        <div class="kode_event">
                                        <div class="kode_event_date"><h3>{{$album->popularity}}<small>%100</small></h3></div>
                                            <div class="kode_event_content">
                                                <h4><a href="#">{{$album->name}}</a></h4>
                                                <small>{{$album->genres}}</small>
                                                <a href="{{route ('detail',$album->id)}}" class="btn_normal bk_border_btn active">{{ trans('homepage.show') }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                @if($artists)
                                    @foreach ($artists as $artist)
                                        <div class="kode_event">
                                        <div class="kode_event_date"><h3>{{$artist->popularity}}<small>%100</small></h3></div>
                                            <div class="kode_event_content">
                                                <h4><a href="#">{{$artist->name}}</a></h4>
                                                <small>{{$artist->genres}}</small>
                                                <a href="{{route ('artist_detail',$artist->id)}}" class="btn_normal bk_border_btn active">{{ trans('homepage.show') }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
        </div>
        
@endsection
