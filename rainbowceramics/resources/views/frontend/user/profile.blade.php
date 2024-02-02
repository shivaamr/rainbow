@extends('layouts.app')

@section('title','Rainbow Ceramics - User')


@section('content')

<div class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h4>User Profile

            <a href="{{ url('/changepassword')}}" class="btn btn-warning" style="float:right">Change Password ?</a>

            </h4>
            <div class="underline mb-4"></div>
        </div>

        <div class="col-md-10">
        @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if($errors->any())
            <div class="alert alert-warning">
            @foreach($errors->all() as $error )
            <div>{{ $error}}</div>

            @endforeach

            </div>
          @endif
            <div class="card shadow">
                 <div class="card-header bg-primary">
                    <h4  class="mb-4 text-white">User Details

                    </h4>
                 </div>
                <div class="card-body">
                    <form action="{{ url('/profile')}}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" name="username"  value="{{Auth::user()->name}}" class="form-control"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Eamil">Email</label>
                                    <input type="text" readonly name="email" value="{{Auth::user()->email}}"   class="form-control"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Eamil">Mobile Number</label>
                                    <input type="text" name="phone" value="{{ Auth::user()->userDetail->phone ?? ''}}"    class="form-control"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="zipcode">Zipcode</label>
                                    <input type="text" name="pin_code" value="{{ Auth::user()->userDetail->pin_code ?? ''}}"    class="form-control"/>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="Eamil">Address</label>
                                    <input type="text" name="address" value="{{ Auth::user()->userDetail->address ?? ''}}"    class="form-control"/>
                                </div>
                            </div>

                            <div class="col-md-12">
                               <button type="submit" class="btn btn-warning" style="float:right">Save</button>
                            </div>


                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
