<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from template.hasthemes.com/flone/flone/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:47:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flone - Ecommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
@include("layoutsfront.header")
@include("layoutsfront.slider")
@include("layoutsfront.marketing")
@yield("content")
@include("layoutsfront.footer")


<!-- Modal -->
@include("layoutsfront.modal")
<!-- Modal end -->









<!-- All JS is here
============================================ -->

<script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from template.hasthemes.com/flone/flone/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:47:43 GMT -->
</html>
