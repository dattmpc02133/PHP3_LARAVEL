<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | @yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{asset('vendors')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors')}}/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{asset('vendors')}}/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build')}}/css/custom.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.19.1/full-all/ckeditor.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
          @include('admin.clientsAdmin.partials.sidebar')
              <div class="right_col" style="min-height: 676px;" role="main">
                @yield('content-admin')
              </div>
        </div>
    </div>
     <!-- jQuery -->
    <script src="{{asset('vendors')}}/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors')}}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
    <!-- bootstrap-progressbar -->
    <script src="{{asset('vendors')}}/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    {{-- <!-- <script src="{{asset('build')}}/iCheck/icheck.min.js"></script> --> --}}
    

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build')}}/js/custom.min.js"></script>
   </html>

