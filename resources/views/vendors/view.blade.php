@extends('layouts.test')

@section('title')
    Vendor
@stop

@section('content-header')
    Vendor
@endsection
@section('content')

    @include('vendors.add')
    @include('vendors.list')

@endsection
