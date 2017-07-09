@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('libs/editormd/css/editormd.css')}}">
@endsection
@section('content')

    <div class="container-fluid">
        <form class="form-horizontal" action="{{route('posts.store')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">标题</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">分类</label>
                <select name="category_id" class="form-control " id="">
                    <option value="1">分类</option>
                </select>

            </div>
            <div class="form-group">
                <label for="exampleInputFile"></label>
                <div id="editormd" style="min-height: 200px;">
                    <textarea class="editormd-markdown-textarea" name="markdown"></textarea>

                    <!-- html textarea 需要开启配置项 saveHTMLToTextarea == true -->
                    <textarea class="editormd-html-textarea" name="content"></textarea>

                </div>
            </div>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
    </div>
    @endsection
@section('scripts')
    <script src="{{asset('/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/libs/editormd/editormd.min.js')}}"></script>
    <script>
        var height = $(window).height() - $('.doc-content-header').outerHeight() - 50;
        var editor = editormd("editormd", {
            path: "/libs/editormd/lib/",
            width: '100%',
            height: 600,
//            markdown: '',
            disabledKeyMaps: ["Ctrl-S"],
            imageUpload: true,
//            saveHTMLToTextarea : true,
            imageFormats: ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL: "/common/mdEditorUpload",
            toolbarIcons: function () {
                return ["undo", "redo", "|", "bold", "del", "italic", "quote", "hr", "|", "h1", "h2", "h3",
                    "|", "list-ul", "list-ol", "link", "image", "code-block", "table", "datetime",
                    "watch", "preview", "fullscreen", "clear", "search"
                ]
            }
        });

    </script>
    @endsection