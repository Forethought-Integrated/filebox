<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mastech Digital</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/mastech-new-logo.png') }}">
  <!-- <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/folder.png') }}"> -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
     <img src="{{asset('img/mastech-new-logo.png')}}">
    <div class="row">
      <div class="col-md-12">
        <!-- <h2>Embed file manager</h2> -->
        <iframe src="/knowledgemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
      </div>
    </div>
  </div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
  </script>

  
 
{{-- filemanager with javascript --}}

  {{-- <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
  </script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('file', {prefix: route_prefix});
  </script>
 --}}
 
{{-- ./filemanager with javascript --}}

 
</body>
</html>
