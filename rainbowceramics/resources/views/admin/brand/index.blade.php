@extends('layouts.admin')

	@section('content')
	<div class="row">
		<div class="col-md-12 grid-margin">
            @if(session('message'))
            <div class="alert alert-success">{{session('message') }}</div>
            @endif
		</div>

        <div class="col-md-12 grid-margin">
            <livewire:admin.brand.index/>
		</div>
	</div>
   @endsection
