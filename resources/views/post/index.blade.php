@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('libs/editormd/css/editormd.css')}}">
@endsection
@section('content')
    <div class="container-fluid">
       <table class="table table-striped  table-hover">
           <thead>
           <tr>
               <th>序号</th>
               <th>标题</th>
               <th>内容概括</th>
               <th>所属类型</th>
               <th>发布时间</th>
               <th>状态</th>
               <th>操作</th>
           </tr>
           </thead>

            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ str_limit($post->content,30) }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->published_at }}</td>
                    <td>{{ $post->deleted_at }}</td>
                    <td><button type="button" class="btn btn-primary">编辑</button><button type="button" class="btn btn-danger">删除</button></td>
                </tr>
            @endforeach
            </tbody>
       </table>
        <div class="text-center">
            {!! $posts->render() !!}
        </div>
    </div>
    @endsection
@section('scripts')
    <script src="{{asset('/libs/jquery/jquery.min.js')}}"></script>
    @endsection