@extends('layouts.retailers')

<main id="main" class="main">

@section('content')


<div class="row">
    <div class="col-md-12 grid-margin">
        @if(session('message'))
        <div class="alert alert-success">{{session('message') }}</div>
        @endif
    </div>

    <div class="col-md-12 grid-margin">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Our Products</h4>
                    </div>


                    <livewire:retailers.product.index :category="$category"  />



                </div>
            </div>

    </div>
</div>


@endsection
