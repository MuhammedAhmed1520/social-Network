<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    {{--  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">  --}}
    <link href="/assests/css/bootstrap.css" rel="stylesheet">
    <link href="@yield('css')" rel="stylesheet">
    <link href="/css/master.css" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ URL::to('css/dash.css')}}">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
    <!-- //Custom Theme files -->
    <!-- web font -->
    {{--  <link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">  --}}
    {{--  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">  --}}

    <style>
    </style>


</head>
<body>
    
    <div class="over"></div>
        @include('includes.header')
        <div class="container">
        @yield('content')
        </div>

    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
	<script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
    </script>
    <script type="text/javascript" src="/assests/js/bootstrap.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/main.js') }}"></script>
</body>
</html>

