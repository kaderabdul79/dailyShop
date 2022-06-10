@extends('backend.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="statistic__item">
                <h2 class="number">{{$activeProduct}}</h2>
                <span class="desc">Active Product's</span>
                <div class="icon">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="statistic__item">
                <h2 class="number">{{$activeCategory}}</h2>
                <span class="desc">Active Category's</span>
                <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="statistic__item">
                <h2 class="number">{{$activeBrand}}</h2>
                <span class="desc">Active Brand's</span>
                <div class="icon">
                    <i class="zmdi zmdi-calendar-note"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection