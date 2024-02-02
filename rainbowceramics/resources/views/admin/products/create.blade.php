@extends('layouts.admin')

<main id="main" class="main">

@section('content')



    <section class="section dashboard">

        <div class="row" >
            <div class="col-md-12 grid-margin" >
                <div class="card">
                  <div class="card-header">
                    <h1 style="font-size:20px;">Add Products<a href="{{ url('admin/products')}}" class="btn btn-primary"  style="float:right;">Back</a></h1>
                  </div>
                  <div class="card-body">
                  @if($errors->any())
                    <div class="alert alert-warning">
                    @foreach($errors->all() as $error )
                    <div>{{ $error}}</div>

                    @endforeach

                    </div>
                  @endif
                  <form action="{{ url('admin/products')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                          </li>
                          <li class="nav-item" role="presentation" style="margin-left:20px;">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Price Details</button>
                          </li>
                          <li class="nav-item" role="presentation" style="margin-left:20px;">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Details</button>
                          </li>
                          <li class="nav-item" role="presentation" style="margin-left:20px;">
                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#Image" type="button" role="tab" aria-controls="contact" aria-selected="false">Image</button>
                          </li>
                          <li class="nav-item" role="presentation" style="margin-left:20px;">
                            <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#Color" type="button" role="tab" aria-controls="contact" aria-selected="false">Product Color</button>
                          </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade border p-3 show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="row">
                                <div class="col-md-4">
                                <div class="mb3">
                                          <label for="">Category</label>
                                          <select name="category_id" id="" class="form-control">
                                          @foreach($categories as $category)
                                          <option value="{{ $category->id}}">{{ $category->name}}</option>
                                          @endforeach


                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Name</label>
                                      <input type="text" name="name" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="mb3">
                                      <label for="category">Product Slug</label>
                                        <input type="text" name="slug" class="form-control">

                                      </div>
                                  </div>

                              </div>
                  <div class="card" style="margin-top: 15px;">
                     <div class="card-header">
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="mb3">
                                      <label for="category">Product Shape<Section></Section></label>
                                        <input type="text" name="shape" class="form-control">

                                      </div>
                                  </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                          <label for="">Product Usage</label>
                                          <input type="text" name="usage" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Material</label>
                                      <input type="text" name="material" class="form-control">

                                    </div>
                                </div>

                              </div>

                              <div class="row">
                                <div class="col-md-4">
                                <div class="mb3">
                                          <label for="">Product Size</label>
                                          <input type="text" name="size" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Pattern</label>
                                      <input type="text" name="pattern" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Baseshape</label>
                                      <input type="text" name="baseshape" class="form-control">

                                    </div>
                                </div>
                              </div>


                            </div>

                        </div>
                              </div>
                          <div class="tab-pane fade border p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="row">
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Brand</label>
                                    <select name="brand" id="" class="form-control">
                                          @foreach($brands as $brand)
                                          <option value="{{ $brand->name}}">{{ $brand->name}}</option>
                                          @endforeach


                                          </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Description</label>
                                      <input type="text" name="description" class="form-control">

                                    </div>
                                </div>

                                                  <div class="col-md-4">
                                                  <div class="mb3">
                                                      <label for="category"> Price</label>
                                                        <input type="number" name="price" class="form-control">

                                                      </div>
                                                  </div>

                                                </div>
                             </div>
                          <div class="tab-pane fade border p-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                               <div class="row">
                            <div class="col-md-4">
                              <label for="category">Quantity</label>
                                 <input type="number" name="quantity" class="form-control">

                            </div>
                            <div class="col-md-4">
                                <label for="category">Thickness</label>
                                   <input type="number" name="thickness" class="form-control">

                              </div>
                              <div class="col-md-4">
                                <label for="category">Diameter</label>
                                   <input type="text" name="diameter" class="form-control">

                              </div>
                        </div>
                        <div class="card" style="margin-top: 15px;">
                            <div class="card-header">
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-2">
                               <label for="category">Trending</label>
                               <input type="checkbox" name="trending" style="margin-top: 4px;" >
                           </div>
                            <div class="col-md-2">
                                 <label for="category">Featured</label>
                                 <input type="checkbox" name="featured" >
                            </div>
                            <div class="col-md-2">
                                <label for="category">Status</label>
                                 <input type="checkbox" name="status" >
                            </div>
                          </div>
                        </div>
                       </div>



                          </div>
                          <div class="tab-pane fade border p-3" id="Image" role="tabpanel" aria-labelledby="profile-tab">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <label for="category">Upload Image</label>
                                        <input type="file" name="image[]" multiple  class="form-control">
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                           </div>

                           <div class="tab-pane fade border p-3" id="Color" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <label for="category">Select Color</label>
                                @forelse($colors as $color)
                                <div class="col-md-3">
                                    <input type="checkbox" name="colors[ {{ $color->id}}]" value=" {{ $color->id}}" /> {{ $color->name}}
                                    <br/>
                                    Quantity - <input type="number" name="quantity[{{ $color->id}}]" class="form-control">

                                  </div>
                                @empty
                                    <div class="col-md-12">
                                        <p>Nocolor</p>
                                    </div>

                                @endforelse




                           </div>
                      </div>

                      </div>
                      <div>

                      <button type="submit" class="btn btn-primary" style="float:right;margin-top:15px;">Submit</button>
                      </div>

                </form>
                    </div>
                   </div>
                </div>
            </div>
         </div>


    </section>

</main><!-- End #main -->
@endsection
