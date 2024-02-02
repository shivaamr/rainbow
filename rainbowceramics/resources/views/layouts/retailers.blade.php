<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- Custom styles for this template-->

    <link href=" {{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">


	@livewireStyles

    <div id="wrapper">

        @include('layouts.include.retailers.retailersidebar');

         <div id="content-wrapper" class="d-flex flex-column">
                 <!-- Main Content -->
                 <div id="content">
                    @include('layouts.include.retailers.retailernavbar');

                       <div class="container-fluid">
        @yield('content');
         </div>
                 </div>
          </div>

        </div>
	   <!-- Scripts -->


    <!-- Bootstrap core JavaScript-->


    <script src="{{ asset('assets/js/jquery.min.js') }}" > </script>

	 <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" > </script>

  <!--Bootstrap Js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


	     <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }} "></script>

    <!-- Custom scripts for all pages-->

    <script src="{{ asset('admin/js/sb-admin-2.min.js') }} "></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }} "></script>

	@livewireScripts
