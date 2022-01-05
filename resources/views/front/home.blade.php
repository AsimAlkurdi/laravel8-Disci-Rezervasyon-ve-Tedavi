@extends('layouts.front.fmaster')


@section('title',$setting->title)
@section('keywords',$setting->keywords)
@section('description',$setting->description)


@section('slider')
    @include('front\slider')
@endsection

@section('appointslider')
    @include('front\appointment')
@endsection

@section('content')
    @include('front\content')
@endsection
