<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>电话手表客户端技术团队- BBK</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('/libs/bootstrap/assets/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('/static/common/css/public.css')}}" >
    <link rel="stylesheet" href="{{asset('/static/blog/css/index.css')}}" >


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header>
    <!--navbar-inverse-->
    <nav class="navbar navbar-default  ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">电话手表客户端技术团队 - BBK</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页</a></li>
                    <li><a href="/GitLab">GitLab</a></li>
                    <li><a href="/open">开源作品</a></li>
                    <li><a href="/lab">技术实验室</a></li>
                    <li><a href="/group">兴趣小组</a></li>
                    <li><a href="/about">关于团队</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="/login">登录</a></li>
                    <li><a href="/register">注册</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="nav-page">
        <div class="container" style="">
            <div class="row" style="position: relative;top: 75px;margin-top: -17px;">
                <div class="col-md-8">
                    <h4>首页</h4>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>
    </div>
</header>


<article class="container" style="margin-top: 50px;">
    <section class="row" id="content">
        <section class="col-md-8" style="background-color: white; padding: 15px;min-height: 900px;">
            <div class="push-article">
                <strong>推荐文章：</strong>
                <span>
                    <a class="push-item">Mysql</a>
                    <a class="push-item">腾讯AlloyTeam退出前端界</a>
                     <a class="push-item">ccc</a>
                </span>
            </div>
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
        </section>
        <section class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">推荐项目</div>
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">
                                    Cras justo odio
                                </a>
                                <a href="#" class="list-group-item">社交项目组文档</a>
                                <a href="#" class="list-group-item">安卓端技术文档</a>
                                <a href="#" class="list-group-item">IOS技术端文档</a>
                                <a href="#" class="list-group-item">C/C++</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">标签</div>
                        <div class="panel-body">
                            <a class="label label-default">swift</a>
                            <a class="label label-primary">JavaScript</a>
                            <a class="label label-success">Android</a>
                            <a class="label label-success">网络协议</a>
                            <a class="label label-info">C/C++</a>
                            <a class="label label-warning">HTML5</a>
                            <a class="label label-danger">CSS3</a>
                            <a class="label label-danger">Node.js</a>
                            <a class="label label-danger">Php</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">友情链接</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="">小天才电话手表</a> </li>
                                <li class="list-group-item"><a href="">步步高教育电子</a></li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </section>
    </section>
</article>
<footer class="footer">
    <div class="container text-center">
        <p class="text-muted">©2017 步步高教育电子电话手表客户端技术团队.</p>
    </div>
</footer>

<script src="/libs/bootstrap/assets/js/vendor/jquery.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/libs/template/template-native.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/libs/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
