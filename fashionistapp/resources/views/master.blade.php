<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<!-- Mirrored from www.nobleui.com/html/template/demo1-ds/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 19:47:32 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>FASHIONISTA</title>

  <!-- Fonts -->
  <link rel="preconnect" href="{{ asset('template/https://fonts.googleapis.com/')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('template/assets/vendors/core/core.css')}}">
	<!-- endinject -->
	<!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('template/assets/vendors/flatpickr/flatpickr.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{ asset('template/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('template/assets/css/demo1/style.min.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.png')}}" />
</head>
<body class="sidebar-dark">
	<div class="main-wrapper">


        @include('inc.sidebar')


		<div class="page-wrapper">

			@include('inc.navbar')

            @yield('content')

		@include('inc.footer')
