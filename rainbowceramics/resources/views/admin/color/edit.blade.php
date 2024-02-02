@extends('layouts.admin')

<main id="main" class="main">

@section('content')



    <section class="section dashboard">
        <div class="row" >
            <div class="col-md-12 grid-margin" >
                <div class="card">
                    <div class="card-header">
                        <h1 style="font-size:20px;">EDIT Color
                        <a href="{{ url('admin/color')}}" class="btn btn-primary"  style="float:right;">Back</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/color/'.$color->id )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row" >
                            <div class="col-md-6 mb-3">
                                <label for="category">Color Name</label>
                                <input type="text" name="name" value="{{ $color->name}}" class="form-control">
                                @error('name')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
            @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="category">Color Code</label>
                                <input type="text" name="code" value="{{ $color->code}}" class="form-control">
                                @error('slug')<h1 class="text-danger" style="font-size:18px;padding-top:10px;">{{ $message }} </h1>
            @enderror
                            </div>


                            <div class="col-md-6 mb-3">
                            <label for="status">Color Status</label>
                                <input type="checkbox" name="status" {{ $color->status == '1' ?'checked':''}}>

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

