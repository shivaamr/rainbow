@extends('layouts.admin')

@section('title','Users List')

<main id="main" class="main">
       @section('content')


       <div class="row" >
                <div class="col-md-12 grid-margin" >

                @if(session('message'))
            <div class="alert alert-success">

            <div>{{ session('message')}}</div>



            </div>
          @endif
                    <div class="card">
                        <div class="card-header">
                            <h1 style="font-size:20px;">User
                            <a href="{{ url('admin/users/create')}}" class="btn btn-primary"  style="float:right;">Add Users</a>
                            </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->id}}</td>

                                        <td>{{ $user->name}}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>

                                        @if($user->role_as == '0')
                                            <label for="" class="badge btn btn-primary">User</label>
                                        @elseif($user->role_as == '1')
                                        <label for="" class="badge btn btn-success">Admin</label>
                                        @elseif($user->role_as == '2')
                                        <label for="" class="badge btn btn-success">Retailers</label>
                                        @elseif($user->role_as == '3')
                                        <label for="" class="badge btn btn-success">Wholesellers</label>
                                        @else
                                        <label for="" class="badge btn btn-danger">None</label>

                                        @endif

                                        </td>
                                        <td>
                                            <a href="{{ url('admin/users/'.$user->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{ url('admin/users/'.$user->id.'/delete')}}"
                                            onclick = "return confirm('Are y sure')"
                                            class="btn btn-sm btn-success">Delete</a>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7">NO Products</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </main><!-- End #main -->

		 @endsection
