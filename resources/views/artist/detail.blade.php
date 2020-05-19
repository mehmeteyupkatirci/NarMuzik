@extends('layouts.master')
@section('content')
<!--Banner Map Wrap Start-->
<div class="msl-banner2">
    <div class="container">
        <div class="artist-banner">
            <div class="artist-banner-thumb">
                <figure><img src="{{$artist->images}}" alt="KODEFOREST"></figure>
                <div class="text-overflow">
                    <h5>{{ $artist->name }}</h5>
                    <a class="btn-1 theme-bg" href="#"><i class="fa fa-volume-up"></i>{{ trans('artist-detail.play') }}</a>
                    <a class="btn-1 theme-bg" target="_blank" href="https://github.com/mehmeteyupkatirci"><i
                            class="fa fa-github fa-lg"></i>{{ trans('artist-detail.follow') }}</a>
                    <div class="clic-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="following-wrap">
                <p>{{ trans('artist-detail.followers') }}<span>23202,315</span></p>
                <p>{{ trans('artist-detail.following') }}<span>02</span></p>
            </div>
        </div>
        <!--Music Album Wrap Start-->
    </div>
    <div class="music-album-wrap">
        <div class="container">
            <ul class="nav-tabs music-album-nav">
                <li class="active" role="presentation">
                    <a data-toggle="tab" aria-controls="albums" role="tab" href="#albums">{{ trans('artist-detail.albums') }}</a>
                </li>
                <li>
                    <a data-toggle="tab" aria-controls="albums" href="#biography">{{ trans('artist-detail.bio') }}</a>
                </li>
            </ul>
        </div>
        <!--Music Album Wrap End-->
    </div>
</div>
<!--Banner Map Wrap End-->
<div class="kode_content_wrap">
    <div class="tab-content">
        <div class="tab-pane active" id="albums" role="tabpanel">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="album-outer">
                                <!--Music Album List Thumb Start-->
                                <div class="msl-black">
                                    <div class="msl-heading light-color">
                                        <h5><span>{{ trans('artist-detail.artistAlbums') }}</span></h5>
                                    </div>
                                </div>
                                <div class="album-list-thumb-outer">
                                    <div class="albums-tables">
                                        <ul class="table-header">
                                            <li>
                                                <div class="title-btn"><span></span></div>
                                            </li>
                                            <li>
                                                <div class="title-btn"><span>{{ trans('artist-detail.albumName') }}</span></div>
                                            </li>

                                            <li>
                                                <div class="title-btn"><span>{{ trans('artist-detail.realese') }}</span></div>
                                            </li>

                                            <li>
                                                <div class="title-btn"><span>{{ trans('artist-detail.options') }}</span></div>
                                            </li>
                                        </ul>
                                        @if($artist->albums)
                                            @foreach($artist->albums as $album)
                                                <ul>
                                                    <li>
                                                        <div class="cover-pic">
                                                            <img src="{{$album->images}}" alt="">
                                                        </div>
                                                        <span class="nbr"></span>
                                                        <div class="like-btns"><span><i class="fa fa-heart"></i></span>
                                                        </div>
                                                        <div class="play-btn"><a
                                                                href="{{ route ('detail',$album->id) }}"
                                                                class="fa fa-play"></a></div>
                                                    </li>
                                                    <li>
                                                        <div class="artist-title"><span>{{ $album->name }}</span>
                                                        </div>
                                                    </li>
                                                    <li><span class="time-trak">{{ $album->release_date }}</span>
                                                        <div class="other-traks"></div>
                                                    </li>

                                                    <li>
                                                        <div class="p-list">
                                                            <a  href="{{ route ('detail',$album->id) }}"><i class="fa fa-list-alt"></i></a>
                                                            <a href="{{ route ('detail',$album->id) }}"><i class="fa fa-share"></i></a>
                                                            <a href="{{ route ('detail',$album->id) }}"><i class="fa fa-comments-o"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="tab-pane" id="biography" role="tabpanel">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Artist Bio Wrap Start-->
                            <div class="artist-bio">
                                <!--Heading 3 Start-->
                                <div class="msl-black">
                                    <div class="heading3">
                                        <h4><i class="fa fa-user"></i>{{ trans('artist-detail.overview') }}</h4>
                                    </div>
                                </div>
                                <!--Heading 3 End-->
                                <div class="text">
                                    <p>Speaking of {{ $artist->name }}, the first {{ $artist->genres }} comes to
                                        mind.
                                        They are really good at this kind of music.
                                        Those who listen to them on stage realize how lucky they really are.</p>
                                    <!--Widget Info Start-->
                                    <div class="widget-event-info">
                                        <h5>{{ trans('artist-detail.contact') }}</h5>
                                        <ul>
                                            <li>
                                                <h6><i class="fa fa-globe"></i>Website</h6>
                                                <p>www.musicblog.com</p>
                                            </li>
                                            <li>
                                                <h6><i class="fa fa-envelope"></i>email</h6>
                                                <p>Musicbloginfo@gmail.com</p>
                                            </li>
                                            <li>
                                                <h6><i class="fa fa-phone"></i>phone</h6>
                                                <p>111 222 444 333</p>
                                            </li>
                                            <li class="msl-social">
                                                <h6><i class="fa fa-share-alt"></i>Socialize</h6>
                                                <p>
                                                    <a target="_blank" href="https://github.com/mehmeteyupkatirci"><i
                                                            class="fa fa-github fa-2x"></i></a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection