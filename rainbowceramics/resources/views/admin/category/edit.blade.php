@extends('layouts.admin')

<main id="main" class="main">

@section('content')



    <section class="section dashboard">
        <div class="row" >
            <div class="col-md-12 grid-margin" >
                <div class="card">
                    <div class="card-header">
                        <h1 style="font-size:20px;">EDIT Category
                        <a href="{{ url('admin/category')}}" class="btn btn-primary"  style="float:right;">Back</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/category/'.$category->id )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row" >
                            <div class="col-md-6 mb-3">
                                <label for="category">Category Name</label>
                                <input type="text" name="name" value="{{ $category->name}}" class="form-control">
                                @error('name')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
            @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="category">Category Slug</label>
                                <input type="text" name="slug" value="{{ $category->slug}}" class="form-control">
                                @error('slug')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
            @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="description">Category Description</label>
                                <input type="text" name="description" value="{{ $category->description}}" class="form-control">
                                @error('description')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
            @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image">Category Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset('/uploads/category/'.$category->image)}}" alt="image" style="height:120px;width:120px;padding:10px;">
                                @error('image')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
            @enderror
                                </div>
                            <div class="col-md-6 mb-3">
                            <label for="status">Category Status</label>
                                <input type="checkbox" name="status" {{ $category->status == '1' ?'checked':''}}>

                            </div>
                            <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary"  style="float:right;">Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

             </div>
        </div>

    </section>

  </main><!-- End #main -->
@endsection

