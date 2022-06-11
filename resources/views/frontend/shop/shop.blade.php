@extends('frontend.master')

@section('title')
    Product Page
@endsection

@section('content')
    
    <!-- start: breadcrumbs -->
    <section class="row breadcrumbs max-inner">
        <div class="columns col-12">
          <ul class="breadcrumb-list">
            <li><a href="index.html">Home</a></li>
            <li>Product results</li>
          </ul>
        </div>
      </section>
      <!-- end: breadcrumbs -->
  
  
      <!-- start: sort + product nav -->
      <section class="filter-sort">
        <div class="row max-inner">
  
          <div class="columns col-2 sort-options">
            <span>Size:</span>
            <form>
              <label for="size-select" class="select-label">
                <select class="styled-drop-down"  id="size-select" name="size-select">
                  <option selected="selected">XS</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
              </label>
            </form>
          </div>
  
          <div class="columns col-2 sort-options">
            <span>Color:</span>
            <form>
              <label for="color-select" class="select-label">
                <select class="styled-drop-down" id="color-select" name="color-select">
                  <option selected="selected">All</option>
                  <option>Red</option>
                  <option>Green</option>
                  <option>Yellow</option>
                  <option>Orange</option>
                </select>
              </label>
            </form>
          </div>
  
  
  
          <div class="columns col-6 products-paging">
            <ul>
              <li><a href="#"><i class="fa fa-caret-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#" class="current-prod-page">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
            </ul>
          </div>        
          
  
        </div>
      </section>
      <!-- end: sort + product nav -->
  
  
  
      <!-- start: product grid -->
      <section class="product-grid shop-grid">
  
        <div class="row max-inner sortable-grid">
  
          <!-- start: grid item -->
              
          @foreach ($products as $product)
         {{-- {{ $product->id}} --}}
          <div class="columns col-3 grid-item">
            <div class="grid-item-media"><a href="{{route('product-details',$product->id)}}">
              <img src="{{ asset($product->product_image)  }}" alt="{{$product->name}}" width="330px" height="500px" /></a>
            </div>
            <div class="grid-item-desc">
              <h2>
                <a class="grid-item-link" href="{{route('product-details',$product->id)}}">
                  <span class="grid-item-title">{{$product->product_name}}</span>
                  <span class="grid-item-price">{{$product->product_price}} TK</span>
                </a>
              </h2>
            </div>
          </div>
          @endforeach
          <!-- end: grid item -->
  
        </div>
      </section>
      <!-- end: product grid -->
  
     
  
      <!-- start: bottom pagination -->
      <section class="product-pagination">
        <div class="row max-inner">
          <div class="columns col-12">
            <ul class="paging-list">
              <li><a href="#"><i class="fa fa-caret-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#" class="current-prod-page">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
            </ul>
          </div>
        </div>
      </section>    
      <!-- end: bottom pagination -->

@endsection