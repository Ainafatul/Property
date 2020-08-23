<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('res/css/custom.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=lora:400,700|Montserrat:200,400,500,600,700,900&display=swap">
    <link rel="script" href="{{asset('res/js/main.js')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=lora:400,700|Montserrat:200,400,500,600,700,900&display=swap">


</head>
<body>
@include('section.TopNavBar')

@yield('content')

@section('footer')
    @include('section.Footer')
@show
<script>
    @stack('scripts')
</script>
</body>
</html>
