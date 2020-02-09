<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:title" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Industry - Factory & Industrial HTML Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/line-awesome/css/line-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/flaticon/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin/skin-1.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/templete.min.css')}}">
	<!-- Google Font -->

    @if(app()->getLocale() == 'ar')
    <style type="text/css">
    	.dlab-topbar-left{
    		background: red;
    	}
    	.arbi{
    		height: 225px;
    	}

    </style>
        @elseif(app()->getLocale() == 'en')
  <style type="text/css">
    	
    	.arbi{
    		height: 355px;
    	}

    </style>
@elseif(app()->getLocale() == 'fr')
    <style type="text/css">
    
    	.arbi{
    		height: 355px;
    	}

    </style>

	@endif
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/revolution/revolution/css/revolution.min.css')}}">
	
</head>
@include('element.navbar')
@yield('content')
@include('element.footer')

<script src="{{asset('js/combining.js')}}"></script><!-- CONTACT JS  -->
<script src="{{asset('js/jquery.lazy.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/rev.slider.js')}}"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_2();	
	$('.lazy').Lazy();
});	/*ready*/
</script>
</body>
</html>