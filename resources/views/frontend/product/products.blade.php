@extends('frontend.master')

@section('content')

<section class="collections-section">
      
    <div class="row max-inner">

      <div class="columns col-6 collection-item">
        <a href="shop.html">
          <img src="images/collections-image-1.jpg">
          <div class="collection-desc">
            <h2>With love and passion</h2>
            <h3>New shoe collection</h3>
          </div>
        </a>
      </div>
        
      <div class="columns col-6 collection-item">
        <a href="shop.html">
          <img src="images/collections-image-2.jpg">
          <div class="collection-desc">
            <h2>Paris inspiration</h2>
            <h3>For a good time</h3>
          </div>
        </a>
      </div>

    </div>

    <div class="row max-inner">
      <div class="columns col-12 collection-item">
        <a href="shop.html">
          <img src="images/collections-image-3.jpg">
          <div class="collection-desc">
            <h2>Fashion clothes</h2>
            <h3>For summer</h3>
          </div>
        </a>
      </div>
    </div>

  </section>
@endsection