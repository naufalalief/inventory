@extends('layouts.test')
@section('title')
    pembelian
@stop

@section('content-header')
    pembelian
@endsection
@section('content')
    @include('pembelian.add')
    @include('pembelian.list')
@endsection
