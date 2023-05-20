@extends('layouts.test')
@section('title')
    Transaksi
@stop

@section('content-header')
    Transaksi
@endsection
@section('content')
    @include('trx.add')
    @include('trx.list')
@endsection
