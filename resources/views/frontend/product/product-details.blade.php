@extends('frontend.master')

@section('title')
    Product
@endsection
@section('content')

 <!-- start: breadcrumbs -->
 <section class="row breadcrumbs max-inner">
    <div class="columns col-12">
      <ul class="breadcrumb-list">
        <li><a href="index.html">Home</a></li>
        <li>Product page</li>
      </ul>
    </div>
  </section>
  <!-- end: breadcrumbs -->



  <!-- start: main content -->
  <section class="main-content">
    <div class="row max-inner">
      @if ($product)
     <div class="columns col-5 product-media">
        <a href="#"><img src="{{asset($product->product_image)}}" height="600px" width="500px" /></a>
      </div>

      <div class="columns col-6 product-info float-right">
        
        {{-- <span class="product-meta">{{$product->category_name}}</span> --}}
        <h2>{{$product->product_name}}</h2>
        <span class="product-price">{{$product->product_price}} TK</span>

        <div class="row product-desc">
          <p>{{$product->product_long_description}}</p>
        </div>
          
        @endif


        <!-- start: product options form -->
        <form action="{{route('add-to-cart')}}" method="post">
          @csrf
        {{-- <div class="row product-options">
          
          <div class="columns col-4 sort-options">
            <span class="label-text">Size:</span>
            <label for="size-select" class="select-label">
              <select class="styled-drop-down"  id="size-select" name="size-select">
                <option selected="selected">XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
            </label>
          </div>

          <div class="columns col-4 sort-options">
            <span class="label-text">Color:</span>
            <label for="color-select" class="select-label">
              <select class="styled-drop-down" id="color-select" name="color-select">
                <option selected="selected">Black &amp; Grey</option>
                <option>Red</option>
                <option>Green</option>
                <option>Yellow</option>
                <option>Orange</option>
              </select>
            </label>
          </div>

          <div class="columns col-4 sort-options">
            <span class="label-text">Type:</span>
            <label for="material-select" class="select-label">
              <select class="styled-drop-down" id="material-select" name="material-select">
                <option selected="selected">Slim</option>
                <option>Lorem Ipsum</option>
                <option>Lorem Ipsum</option>
                <option>Lorem Ipsum</option>
                <option>Lorem Ipsum</option>
              </select>
            </label>
          </div>
          
        </div> --}}
       {{--  --}}
      
        <div class="row product-options">
          <div class="columns col-6">
            <label for="product-quantity" class="product-quantity">
              <span class="label-text">Quantity:</span>
              <input type="hidden" name="product_id" value="{{$product->id}}" />
              <input type="number" min="1" value="1" name="qty" id="qty">
            </label>              
          </div>

          <div class="columns col-6">
            <input type="submit" name="submit" value="Add to cart" class="submit" />
          </div>
        </div>

        <form>
        <!-- end: product options form -->


      </div>

    </div>
  </section>
  <!-- end: main content -->

@endsection