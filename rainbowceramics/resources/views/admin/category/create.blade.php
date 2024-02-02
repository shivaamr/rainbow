@extends('layouts.admin')

	@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
            @section('content')



            <section class="section dashboard">
              <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>ADD Category
                                <a href="{{ url('admin/category')}}" class="btn btn-primary" style="float: right;">Back</a>
                            </h4>
                        </div>

          <div class="card-body">
            <form action="{{ url('admin/category')}}" method="POST" enctype="multipart/form-data">
             @csrf
                                <div class="row" >
                                    <div class="col-md-6 mb-3">
                                        <label for="category">Category Name</label>
                                        <input type="text" name="name" class="form-control">
                                        @error('name')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
                    @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="status">Category Slug</label>
                                    <input type="text" name="slug" class="form-control">
                                        @error('slug')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
                    @enderror

                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="description">Category Description</label>
                                        <input type="text" name="description" class="form-control">
                                        @error('description')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
                    @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="description">Category Image</label>
                                            <input type="file" name="image" class="form-control">
                                            @error('image')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
                        @enderror
                                        </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="status">Category Status</label>
                                        <input type="checkbox" name="status">

                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="description">Meta Keyword</label>
                                            <input type="text" name="meta_keyword" class="form-control">
                                            @error('meta_keyword')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
                        @enderror
                                        </div>
                                    <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end" style="float: right;">Save</button>
                                    </div>
                                </div>
            </form>

                        </div>
                    </div>

                </div>



              </div>
            </section>
		</div>
	</div>
   @endsection
