@extends('layouts.admin')

@section('title','Edit Users')

<main id="main" class="main">
       @section('content')


       <div class="row" >
                <div class="col-md-12 grid-margin" >
                    <div class="card">
                        <div class="card-header">
                            <h1 style="font-size:20px;">Edit User
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

                            <form action="{{ url('/admin/users/'.$users->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row" >
                                <div class="col-md-4 mb-3">
                                    <label for="username">User Name</label>
                                    <input type="text" name="name" value="{{ $users->name}}" class="form-control">

                                </div>
                                <div class="col-md-4 mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" readonly value="{{ $users->email}}" class="form-control">


                                </div>
                                <div class="col-md-4 mb-3">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control">

                                </div>
                                <div class="col-md-6 mb-3">
                                <label for="selectrole">Select User Role</label>
                                    <select type="text" name="role_as"  class="form-control">
                                        <option value="">Select Role</option>
                                        <option value="0" value="{{ $users->role_as == '0' ? 'selected':''}}">User</option>
                                        <option value="1" value="{{ $users->role_as == '1' ? 'selected':''}}">Admin</option>
                                        <option value="2"  value="{{ $users->role_as == '2' ? 'selected':''}}">Retailers</option>
                                        <option value="3"  value="{{ $users->role_as == '3' ? 'selected':''}}">Wholesellers</option>
                                    </select>

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
        </main><!-- End #main -->
		 @endsection
