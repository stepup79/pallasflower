@extends('frontend.layouts.master')

@section('title')
Shop Hoa tươi Pallas 
@endsection

@section('custom-css')
@endsection

@section('main-content')
<!-- Slider -->
@include('frontend.widgets.homepage-slider')
<!-- Banner -->
@include('frontend.widgets.homepage-banner', [$data = $ds_top3_newest_sanpham])
<!-- Product -->
@include('frontend.widgets.product-list', [$data = $ds_top20_newest_sanpham])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Pallas</title>
</head>
<body>
<center>
    <a class="btn btn-outline-secondary mb-4" href="{{ route('frontend.product') }}">Xem thêm >></a>
</center>
</body>
</html>
@endsection

@section('custom-scripts')
@endsection