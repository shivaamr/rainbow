@extends('layouts.app')

@section('title')
{{ $category->name}}

@endsection
@section('content')



<livewire:frontend.product.view :category="$category" :product="$product"/>


@endsection
