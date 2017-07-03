<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="UTF-8">

<title>{{ config('blog.title') }}</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
              <h1>{{ config('blog.title') }}</h1>
              <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
              <hr>
              <ul>

              </ul>
              <hr>

          </div>
</body>
</html>