<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.title') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('libs/bootstrap/assets/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    {{--<link rel="stylesheet" href="{{asset('static/common/css/public.css')}}">--}}
    <link rel="stylesheet" href="{{asset('static/blog/css/dashboard.css')}}">

@yield('style')
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('posts.index')}}">文章管理</a></li>
                <li><a href="{{route('categories.index')}}">分类管理</a></li>
                <li><a href="{{route('labels.index')}}">标签管理</a></li>
                <li><a href="{{route('links.index')}}">友情链接管理</a></li>
                <li><a href="{{route('setting')}}">系统设置</a></li>
            </ul>
            {{--<ul class="nav nav-sidebar">--}}
                {{--<li><a href="">Nav item</a></li>--}}
                {{--<li><a href="">Nav item again</a></li>--}}
                {{--<li><a href="">One more nav</a></li>--}}
                {{--<li><a href="">Another nav item</a></li>--}}
                {{--<li><a href="">More navigation</a></li>--}}
            {{--</ul>--}}
            {{--<ul class="nav nav-sidebar">--}}
                {{--<li><a href="">Nav item again</a></li>--}}
                {{--<li><a href="">One more nav</a></li>--}}
                {{--<li><a href="">Another nav item</a></li>--}}
            {{--</ul>--}}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @yield('content')
        </div>
    </div>
</div>


<script src="{{asset('/libs/bootstrap/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('/libs/bootstrap/js/bootstrap.min.js')}}"></script>
{{--<script src="/libs/template/template-native.js"></script>--}}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('/libs/bootstrap/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
@yield('scripts')
</body>
</html>
