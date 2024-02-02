@extends('layouts.admin')

@section('title','Site Settings')
<main id="main" class="main">


@section('content')

<div class="row" >
    <div class="col-md-12 grid-margin" >
        <div class="card">
            <div class="card-header">
                <h1 style="font-size:20px;">Website</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/settings')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Website Name</label>
                                  <input type="text" name="website_name"  value="{{ $settings->website_name ?? ''}}" class="form-control">
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Website URL</label>
                                  <input type="text" name="website_url"  value="{{ $settings->website_url ?? ''}}" class="form-control">
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Page Title</label>
                                  <input type="text" name="page_title"  value="{{ $settings->page_title ?? ''}}" class="form-control">
                                </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Meta Keyword</label>
                                  <input type="text" name="meta_keyword"  value="{{ $settings->meta_keyword ?? ''}}" class="form-control">
                                </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Meta Description</label>
                                  <input type="text" name="meta_description" value="{{ $settings->meta_description ?? ''}}"  class="form-control">
                                </div>
                        </div>
                    </div>


                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb3">
                            <label for="category">Address</label>
                              <textarea  name="address"  class="form-control" rows="3">  {{ $settings->address ?? ''}}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Phone Number 1</label>
                                  <input type="number" name="phone1"  value="{{ $settings->phone1 ?? ''}}"  class="form-control">

                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Phone Number 2</label>
                                  <input type="number" name="phone2" value="{{ $settings->phone2 ?? ''}}"   class="form-control">

                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb3">
                                <label for="category">Email</label>
                                  <input type="text" name="email"  value="{{ $settings->email ?? ''}}"   class="form-control">

                                </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float:right;margin-top:15px;">Submit</button>
                    </form>


                </div>
            </div>
         </div>
    </div>
</div>

</main><!-- End #main -->
@endsection
