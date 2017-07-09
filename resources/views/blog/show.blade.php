@extends('layouts.blog')

@section('content')

    {{--<div class="push-article">--}}
        {{--<strong>推荐文章：</strong>--}}
        {{--<span>--}}
                    {{--<a class="push-item">Mysql</a>--}}
                    {{--<a class="push-item">腾讯AlloyTeam退出前端界</a>--}}
                     {{--<a class="push-item">ccc</a>--}}
                {{--</span>--}}
    {{--</div>--}}
    <div>
        <h1>{{ $post->title }}</h1>
        <h5>{{ $post->published_at }}</h5>
        <hr>
        {!! nl2br(e($post->content)) !!}
        <hr>
        <button class="btn btn-primary" onclick="history.go(-1)">
            « Back
        </button>
    </div>
    @endsection