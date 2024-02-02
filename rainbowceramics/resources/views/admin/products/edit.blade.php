@extends('layouts.admin')

<main id="main" class="main">

@section('content')



    <section class="section dashboard">

        <div class="row" >
            <div class="col-md-12 grid-margin" >
                <div class="card">
                  <div class="card-header">
                    <h1 style="font-size:20px;">Edit Products<a href="{{ url('admin/products')}}" class="btn btn-primary"  style="float:right;">Back</a></h1>
                  </div>
                  <div class="card-body">
                  @if($errors->any())
                    <div class="alert alert-warning">
                    @foreach($errors->all() as $error )
                    <div>{{ $error}}</div>

                    @endforeach

                    </div>
                  @endif
                  <form action="{{ url('admin/products/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')


                              <div class="row">
                                <div class="col-md-4">
                                <div class="mb3">
                                          <label for="">Category</label>
                                          <select name="category_id" id="" class="form-control">
                                          @foreach($categories as $category)
                                          <option value="{{ $category->id}}" {{ $category->id == $product->category_id ? 'selected':'' }}>
                                            {{ $category->name}}</option>
                                          @endforeach


                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Name</label>
                                      <input type="text" name="name" value="{{ $product->name}}"  class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb3">
                                        <label for="category">Product Slug</label>
                                          <input type="text" name="slug" value="{{ $product->slug}}"  class="form-control">

                                        </div>
                                    </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Shape<Section></Section></label>
                                      <input type="text" name="shape" value="{{ $product->shape}}" class="form-control">

                                    </div>
                                </div>
                              </div>
                                     <div class="card" style="margin-top: 15px;">
                                     <div class="card-header">
                              <div class="row">
                                <div class="col-md-4">
                                <div class="mb3">
                                          <label for="">Product Usage</label>
                                          <input type="text" name="usage" value="{{ $product->usage}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Material</label>
                                      <input type="text" name="material" value="{{ $product->material}}" class="form-control">

                                    </div>
                                </div>

                              </div>

                              <div class="row">
                                <div class="col-md-4">
                                <div class="mb3">
                                          <label for="">Product Size</label>
                                          <input type="text" name="size" value="{{ $product->size}}"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Pattern</label>
                                      <input type="text" name="pattern" value="{{ $product->pattern}}" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Baseshape</label>
                                      <input type="text" name="baseshape" value="{{ $product->baseshape}}" class="form-control">

                                    </div>
                                </div>
                              </div>


                                </div>

                                </div>


                            <div class="row">
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Brand</label>
                                    <select name="brand" id="" class="form-control">
                                          @foreach($brands as $brand)
                                          <option value="{{ $brand->name}}"  {{ $brand->name == $product->brand ? 'selected':'' }}>
                                            {{ $brand->name}}</option>
                                          @endforeach


                                          </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="mb3">
                                    <label for="category">Product Description</label>
                                      <input type="text" name="description" value="{{ $product->description}}" class="form-control">

                                    </div>
                                </div>

                                                  <div class="col-md-4">
                                                  <div class="mb3">
                                                      <label for="category"> Price</label>
                                                        <input type="number" name="price"  value="{{ $product->price}}" class="form-control">

                                                      </div>
                                                  </div>

                                                </div>

                         <div class="row">
                            <div class="col-md-4">
                              <label for="category">Quantity</label>
                                 <input type="number" name="quantity"  value="{{ $product->quantity}}" class="form-control">

                            </div>
                            <div class="col-md-4">
                                <label for="category">Thickness</label>
                                   <input type="number" name="thickness"  value="{{ $product->thickness}}" class="form-control">

                              </div>
                              <div class="col-md-4">
                                <label for="category">Diameter</label>
                                   <input type="text" name="diameter"  value="{{ $product->diameter}}" class="form-control">

                              </div>
                        </div>
                        <div class="card" style="margin-top: 15px;">
                            <div class="card-header">
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-2">
                               <label for="category">Trending</label>
                               <input type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked':'' }} >
                           </div>
                            <div class="col-md-2">
                                 <label for="category">Featured</label>
                                 <input type="checkbox" name="featured"  {{ $product->featured == '1' ? 'checked':'' }}>
                            </div>
                            <div class="col-md-2">
                                <label for="category">Status</label>
                                 <input type="checkbox" name="status"  {{ $product->status == '1' ? 'checked':'' }} >
                            </div>
                          </div>
                        </div>
                       </div>





                                 <div class="row">
                                    <div class="col-md-6">
                                        <label for="category">Upload Image</label>
                                        <input type="file" name="image[]" multiple  class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        @if($product->productImages)
                                        @foreach ($product->productImages as $image)
                                             <img src="{{ asset($image->image)}}" width="100" height="100" alt="" style="margin-top: 20px;border:6px solid #858796">
                                        @endforeach
                                     @else

                         <p>No Image Added</p>
                                     @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <h1>Add Product Color</h1>
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

                      <div>

                      <button type="submit" class="btn btn-primary" style="float:right;margin-top:15px;">Update</button>
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
