@extends('layouts.admin')

@section('title','Users List')

<main id="main" class="main">
       @section('content')


       <div class="row" >
                <div class="col-md-12 grid-margin" >
                    <div class="card">
                        <div class="card-header">
                            <h1 style="font-size:20px;">ADD Users
                            <a href="{{ url('/admin/users')}}" class="btn btn-primary"  style="float:right;">Back</a>
                            </h1>
                        </div>
                        <div class="card-body">
                        @if($errors->any())

                        <div class="alert alert-warning">

                            @foreach($errors->all() as $error)
                                <div>{{ $error}}</div>
                            @endforeach

                        </div>



                        @endif

                            <form action="{{ url('/admin/users')}}" method="POST">
                            @csrf
                            <div class="row" >
                                <div class="col-md-4 mb-3">
                                    <label for="username">User Name</label>
                                    <input type="text" name="name" class="form-control">

                                </div>
                                <div class="col-md-4 mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control">


                                </div>
                                <div class="col-md-4 mb-3">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control">

                                </div>
                                <div class="col-md-6 mb-3">
                                <label for="selectrole">Select User Role</label>
                                    <select type="text" name="role_as" class="form-control">
                                        <option value="">Select Role</option>
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Retailers</option>
                                        <option value="3">Wholesellers</option>
                                </select>

                                </div>

                                <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary"  style="float:right;">Save</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                 </div>
            </div>

        </main><!-- End #main -->
		 @endsection
