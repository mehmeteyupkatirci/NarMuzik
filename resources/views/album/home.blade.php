@extends('layouts.master')
@section('content')
<div class="kode_content_wrap">
    <section class="artist-section">
        <div class="container">
            <div class="mp3-list-wrap">
                    <h2>{{ trans('album-home.page') }}</h2>
           <div class="row">
                @if ($albums)
                    @foreach ($albums as $album)
                    <div class="col-md-3">
                        <div class="latest-album">
                            <article>
                                <figure><a href="#"><img src="{{$album->images}}" alt=""></a></figure>
                                <div class="text webkit">
                                    <div class="left-sec">
                                    <h6><a href="{{route ('detail',$album->id)}}">{{$album->name}}</a></h6>
                                        <p>{{$album->genres}}</p>
                                    </div>
                                    <a class="icon-plus webkit" href="{{route ('artist_detail',$album->artist_id)}}"><i class="fa fa-plus fa-2x"></i></a>
                                    <a class="icon-plus webkit" style="margin-right: 5px;" href="{{route ('detail',$album->id)}}"><i class="fa fa-search fa-2x"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                    @endforeach
                @endif
                {{$albums->links()}}
           </div>
        </div>
    </section>
</div>
<!--Main Content Wrap End-->
@endsection