@extends('frontend.master')

@section('title')
    Cart
@endsection

@section('content')

    <!-- start: breadcrumbs -->
    <section class="row breadcrumbs max-inner">
        <div class="columns col-12">
          <ul class="breadcrumb-list">
            <li><a href="index.html">Home</a></li>
            <li>Cart</li>
          </ul>
        </div>
      </section>
      <!-- end: breadcrumbs -->
  
  
  
      <!-- start: main content -->
      <section class="main-content">
        <div class="row max-inner">
          
          <div class="columns col-12">
          <!-- start: cart form -->
          {{-- <form> --}}
            <table class="cart-table" cellspacing="0">
              <thead>
                <tr>
                  <th class="product-thumbnail">&nbsp;</th>
                  <th class="product-description" colspan="1">Items</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Sub Total</th>
                  <th class="product-remove">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
  
              <!-- start: cart item -->
              @php 
              $i=1;
              $total = 0;
              @endphp
              @foreach ($cartCollection as $item)
              <tr class="cart-item">
                <td class="product-thumbnail">
                  <a href="{{route('product-details',$item->id)}}"><img src="{{asset($item->options->image)}}" style="width: 300px" height="300px"></a>
                </td>
                <td class="product-description"><h3><a href="product.html">{{$item->name}}</a></h3> </td>
                <td class="product-price">{{$item->price}}</td>
                <td class="product-quantity">
                  <label for="quantity-select" class="select-label">
                   <form action="{{route('update-cart-product',$item->rowId)}}" method="post">
                      @csrf
                      <input type="number" min="1" name="qty" value="{{$item->qty}}" id="">
                      <input type="hidden" name="id" value="{{$item->id}}" />
                      <input type="submit" name="submit" value="update" class="button" />
                   </form>
                  </label>                
                </td>
                <td class="product-total">{{ $subtotal = $item->price*$item->qty  }}</td>
                <td class="product-remove">
                  <a href="{{route('remove-to-cart',$item->rowId)}}">X</a>
                </td>
              </tr> 
              @endforeach
              </tbody>
            </table>
  
  
            <!-- start: cart summary -->
            <table class="cart-details">
              <tbody>
              <tr class="spacer-row"><td colspan="5"></td></tr>
              <tr>
                <td class="cart-summary" colspan="3">
                  Summary
                </td>
                <td class="cart-subtotals">
                  <span>Subtotal:</span> {{ $subtotal = $item->price*$item->qty  }}
                </td>
                <td class="cart-shipping">
                  <span>Shipment:</span> <?php $shipment= $subtotal * 0.10  ?> {{$shipment}}
                </td>
                <td class="cart-total">
                  <span>Total to pay:</span> <?php $grandTotal = $subtotal + $shipment ?> {{$grandTotal}}
                </td>
                <td class="cart-submit">
                  <input type="submit" class="cart-submit" name="cart-submit" value="Finalize and pay" />
                </td>
              </tr>
              </tbody>         
            </table>
            <!-- end: cart summary -->   
          <!-- end: cart form -->
          </div>
  
  
        </div>
      </section>
      <!-- end: main content -->

@endsection
    