
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield("title")</title>
  
  {{--include styles--}}
@include("admin.layouts.styles")
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue  ">

{{--include header--}}
@include("admin.layouts.header_login")


  @section("content")
  @show



{{--include Scripts--}}
@include("admin.layouts.scripts")



</body>
</html>
