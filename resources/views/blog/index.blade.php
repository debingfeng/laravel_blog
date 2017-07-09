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
    <ul class="list-group">
        @foreach ($posts as $post)
            <a href="/blog/{{ $post->slug }}" class="list-group-item ">
                <h4 class="list-group-item-heading">{{ $post->title }}</h4>
                <em>({{ $post->published_at }})</em>
                <p class="list-group-item-text">  {{ str_limit($post->content) }}</p>
            </a>
        @endforeach

    </ul>
    <div class="text-center">
        {!! $posts->render() !!}
    </div>
@endsection