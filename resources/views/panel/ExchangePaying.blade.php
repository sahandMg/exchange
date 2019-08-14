@extends('master.layout')
@section('title')
    <title> اکسچنج - اسم سایت </title>
@endsection
@section('content')


    {!! QrCode::size(150)->generate($trans->payinAddress) !!}

@endsection