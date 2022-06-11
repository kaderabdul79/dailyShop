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
        @if ($sliders)
         @foreach ($sliders as $slider)
         
        <li>
          <div class="row max-inner">
            <div class="columns col-12 slide-image"><img src="{{asset($slider->image)}}" alt="slider_image" /></div>
            <div class="columns col-12 col-centered slide-content">
              <h2>{{$slider->title}}</h2>
              <h3>{{$slider->subtitle}}</h3>
              <a href="{{route('product-page')}}" class="btn cta">See the collection</a>
            </div>
          </div>
        </li>
               
         @endforeach
        @endif
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