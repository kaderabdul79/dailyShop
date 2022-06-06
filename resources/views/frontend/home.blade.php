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
              <a href="#" class="btn cta">See the collection</a>
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
      <div class="columns col-3 grid-item">
        <div class="grid-item-media"><a href="product.html"><img src="{{asset('frontend/images/grid-item-image-1.jpg')}}" /></a></div>
        <div class="grid-item-desc">
          <h2>
            <a class="grid-item-link" href="product.html">
              <span class="grid-item-meta">Lorem ipsum</span><hr />
              <span class="grid-item-title">consectetur adipisicing elit</span>
              <span class="grid-item-price">$220.00</span>
            </a>
          </h2>
        </div>
      </div>
      <!-- end: grid item -->

    </div>
  </section>
  <!-- end: product grid -->



  <!-- start: blog section -->
  <section class="blog-section">

    <header class="row section-header max-inner">
      <div class="columns-12 col-centered">
        <h2>Blog news</h2><hr />
      </div>
    </header>

    <div class="row max-inner">

      <!-- start: blog item -->
      <div class="columns col-3 grid-item">
        <div class="grid-item-media"><a href="#"><img src="{{asset('frontend/images/blog-item-image-1.jpg')}}" /></a></div>
        <div class="grid-item-desc">
          <h2>
            <a href="product.html">
              <span class="grid-item-meta">30 May 2014</span>
              <span class="grid-item-title">Dolor in reprehenderit</span>
            </a>
          </h2>
          <p>Natus error sit voluptatem accusantium doloremque laudantium totam rem...</p>
        </div>
      </div>
      <!-- end: blog item -->

    </div>

  </section>
  <!-- end: blog section -->

@endsection