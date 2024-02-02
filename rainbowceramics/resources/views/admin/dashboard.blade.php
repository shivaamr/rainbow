@extends('layouts.admin')

<main id="main" class="main">

@section('content')





    <section class="section dashboard">
    	<div class="row">
            <div class="col-md-12 grid-margin">
                <a class="navbar-brand" href="{{ url('/') }}">Home</a>
                @if(session('message'))
                <h1>{{session('message') }}</h1>
                @endif

                <div class="me-md-3 me-xl-5">
                    <h2>Dashboard</h2>
                    <p>Your dashboard</p>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-body bg-primary text-white mb-3">
                            <label for="">Total Orders</label>
                            <h1>{{ $totalOrder}}</h1>
                            <a href="{{ url('/admin/orders')}}" class="text-white">View</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-danger text-white mb-3">
                            <label for="">Today Orders</label>
                            <h1>{{ $todayOrder}}</h1>
                            <a href="{{ url('/admin/orders')}}" class="text-white">View</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-warning text-white mb-3">
                            <label for="">Month Orders</label>
                            <h1>{{ $thisMonthOrder}}</h1>
                            <a href="{{ url('/admin/orders')}}" class="text-white">View</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-success text-white mb-3">
                            <label for="">Year Orders</label>
                            <h1>{{ $thisYearOrder}}</h1>
                            <a href="{{ url('/admin/orders')}}" class="text-white">View</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-body bg-success text-white mb-3">
                                <label for="">Total Categories</label>
                                <h1>{{ $totalCategories}}</h1>
                                <a href="{{ url('/admin/category')}}" class="text-white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main><!-- End #main -->
@endsection
