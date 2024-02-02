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
        <div class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Our Categories</h4>
                    </div>

                    @forelse($categories as $categotyItem)

                    <div class="col-6 col-md-2">
                        <div class="category-card">
                            <a href="{{ url('/retailers/'.$categotyItem->slug) }}">
                                <div class="category-card-img">
                                    <img src="{{ asset("uploads/category/$categotyItem->image") }}" style="height:166px;width:166px;"  alt="image">
                                </div>
                                <div class="category-card-body">
                                    <h5>{{ $categotyItem->name}}</h5>
                                </div>

                                <td>{{$categotyItem->id  }}</td>
                                <td>{{$categotyItem->name  }}</td>
                                <td>{{$categotyItem->description  }}</td>

                            </a>
                        </div>
                    </div>


                    @empty
                    <div class="col-12">
        sorry no categories
                    </div>

                    @endforelse



                </div>
            </div>
        </div>
    </div>
</div>


@endsection
