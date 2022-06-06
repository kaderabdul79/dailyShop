@extends('frontend.master')
@section('content')
<section class="product-grid">
  <header class="row section-header max-inner">
      <div class="columns-12 col-centered">
        <h2>Featured Products</h2><hr />
      </div>
    </header>

    <div class="row max-inner">

      <!-- start: grid item -->
      <div class="columns col-3 grid-item">
        <div class="grid-item-media"><a href="product.html"><img src="images/grid-item-image-1.jpg" /></a></div>
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
      <!-- start: grid item -->
      <div class="columns col-3 grid-item">
        <div class="grid-item-media"><a href="product.html"><img src="images/grid-item-image-2.jpg" /></a></div>
        <div class="grid-item-desc">
          <h2>
            <a href="product.html">
              <span class="grid-item-meta">Dolor sit</span><hr />
              <span class="grid-item-title">Dolore magna aliqua</span>
              <span class="grid-item-price">$187.00</span>
            </a>
          </h2>
        </div>
      </div>
      <!-- end: grid item -->
      <!-- start: grid item -->
      <div class="columns col-3 grid-item">
        <div class="grid-item-media"><a href="product.html"><img src="images/grid-item-image-3.jpg" /></a></div>
        <div class="grid-item-desc">
          <h2>
            <a href="product.html">
              <span class="grid-item-meta">Duis aute irure</span><hr />
              <span class="grid-item-title">Dolor in reprehenderit</span>
              <span class="grid-item-price">$380.00</span>
            </a>
          </h2>
        </div>
      </div>
      <!-- end: grid item -->
      <!-- start: grid item -->
      <div class="columns col-3 grid-item">
        <div class="grid-item-media"><a href="product.html"><img src="images/grid-item-image-4.jpg" /></a></div>
        <div class="grid-item-desc">
          <h2>
            <a href="product.html">
              <span class="grid-item-meta">Enim ad minim </span><hr />
              <span class="grid-item-title"> Nemo enim ipsam</span>
              <span class="grid-item-price">$130.00</span>
            </a>
          </h2>
        </div>
      </div>
      <!-- end: grid item -->

    </div>
  </section>
@endsection