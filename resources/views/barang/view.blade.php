@extends('layouts.test')
@section('title')
    Inventory
@stop

@section('content-header')
    Inventory
@endsection
@section('content')
    @include('barang.add')
    @include('barang.list')
@endsection
