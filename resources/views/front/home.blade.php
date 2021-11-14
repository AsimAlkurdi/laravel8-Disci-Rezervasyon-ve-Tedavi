@extends('layouts.front.fmaster')


@section('title'.'deneme sayfa')
@section('keywords'.'deneme keywords')
@section('description'.'deneme description')


@section('slider')
    @include('front\slider')
@endsection

@section('appointslider')
    @include('front\appointment')
@endsection

@section('content')
    @include('front\content')
@endsection
