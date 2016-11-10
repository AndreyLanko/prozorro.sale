@extends('layouts/app')

@section('html_header')
    @include('partials/header-sale-inside')
    {!!$html['header']!!}
    {!!$html['popup']!!}
@endsection

@section('html_footer')
    @include('partials/footer')
@endsection

@section('content')

@include('partials/form')

@endsection
