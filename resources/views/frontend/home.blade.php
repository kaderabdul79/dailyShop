@extends('frontend.master')


@section('title')
    Home
@endsection

@section('content')

<!-- start: content slider-->
<section class="content-slider">
        
    <div class="flexslider">
      <ul class="slides">
        <!-- start: slide -->
        <li>
          <div class="row max-inner">
            <div class="columns col-12 slide-image"><img src="{{asset('frontend/images/slide-image-1.jpg')}}" /></div>
            <div class="columns col-12 col-centered slide-content">
              <h2>Vogue Style</h2>
              <h3>For modern women</h3>
              <a href="{{route('shop-page')}}" class="btn cta">See the collection</a>
            </div>
          </div>
        </li>
        <!-- end: slide -->
        <!-- start: slide -->
        <li>
          <div class="row max-inner">
            <div class="columns col-12 slide-image"><img src="{{asset('frontend/images/slide-image-2.jpg')}}" /></div>
            <div class="columns col-12 col-centered slide-content">
              <h2>New Collection</h2>
              <h3>For your beauty and fashion</h3>
              <a href="#" class="btn cta">See the collection</a>
            </div>
          </div>
        </li>
        <!-- end: slide -->
        <!-- start: slide -->
        <li>
          <div class="row max-inner">
            <div class="columns col-12 slide-image"><img src="{{asset('frontend/images/slide-image-3.jpg')}}" /></div>
            <div class="columns col-12 col-centered slide-content">
              <h2>Feel the luxury</h2>
              <h3>special collection</h3>
              <a href="#" class="btn cta">See the collection</a>
            </div>
          </div>
        </li>
        <!-- end: slide -->
      </ul>
    </div>
  </section>
  <!-- end: content slider-->


  <!-- start: product grid -->
  <section class="product-grid">

    <header class="row section-header max-inner">
      <div class="columns-12 col-centered">
        <h2>Featured Products</h2><hr />
      </div>
    </header>

    <div class="row max-inner">

      <!-- start: grid item -->
      @if (isset($products))
        @foreach ($products as $product)
         <div class="columns col-3 grid-item">
          <div class="grid-item-media"><a href="{{route('product-details',$product->id)}}"><img src="{{asset($product->product_image)}}" height="400px" width="300px" /></a></div>
          <div class="grid-item-desc">
            <h2>
              <a class="grid-item-link" href="">
                <span class="grid-item-title">{{$product->name}}</span>
                <span class="grid-item-price">{{$product->price}}</span>
              </a>
            </h2>
          </div>
        </div>    
      @endforeach
      @endif
      <!-- end: grid item -->

    </div>
  </section>
  <!-- end: product grid -->


@endsection