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
      
      <div class="columns col-5 product-media">
        <a href="#"><img src="images/product-image-1.jpg" /></a>
      </div>

      <div class="columns col-6 product-info float-right">
        
        <span class="product-meta">Manufacturer name</span>
        <h2>Consectetur adipisicing elit</h2>
        <span class="product-price">$220.00</span>

        <div class="row product-desc">
          <p>
            Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas.              
          </p>
        </div>


        <!-- start: product options form -->
        <form action="cart.html">

        <div class="row product-options">
          
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
          
        </div>

        <div class="row product-options">
          <div class="columns col-6">
            <label for="product-quantity" class="product-quantity">
              <span class="label-text">Quantity:</span>
              <!-- <input type="text" value="1" id="product-quantity" /> -->
              <input type="number" value="1" id="product-quantity" />
            </label>              
          </div>

          <div class="columns col-6">
            <button type="submit" class="submit">
              <i class="fa fa-shopping-cart"></i> Add to cart
            </button>              
          </div>
        </div>

        <form>
        <!-- end: product options form -->


      </div>

    </div>
  </section>
  <!-- end: main content -->

@endsection