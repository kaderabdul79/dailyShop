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
          <form>
            <table class="cart-table" cellspacing="0">
              <thead>
                <tr>
                  <th class="product-thumbnail">&nbsp;</th>
                  <th class="product-description" colspan="1">Items</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
  
              <!-- start: cart item -->
              <tr class="cart-item">
                <td class="product-thumbnail">
                  <a href="product.html"><img src="images/cart-image-1.jpg"></a>
                </td>
                <td class="product-description">
                  <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                  <p>
                    Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.                  
                  </p>                
                  <p>
                    <strong>Size:</strong> XS<br />
                    <strong>Color:</strong> Black &amp; gray<br />
                    <strong>Type:</strong> Slim
                  </p>
                </td>
                <td class="product-price">
                  $220.00
                </td>
                <td class="product-quantity">
                  <label for="quantity-select" class="select-label">
                    <select class="styled-drop-down"  id="quantity-select" name="quantity-select">
                      <option selected="selected">1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </label>                
                </td>
                <td class="product-total">
                  $220.00
                </td>
                <td class="product-remove">
                  <a href="#">X</a>
                </td>
              </tr> 
              <!-- end: cart item -->
  
              <!-- start: cart item -->
              <tr class="cart-item">
                <td class="product-thumbnail">
                  <a href="product.html"><img src="images/cart-image-2.jpg"></a>
                </td>
                <td class="product-description">
                  <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                  <p>
                    Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.                  
                  </p>                
                  <p>
                    <strong>Size:</strong> XS<br />
                    <strong>Color:</strong> Black &amp; gray<br />
                    <strong>Type:</strong> Slim
                  </p>
                </td>
                <td class="product-price">
                  $220.00
                </td>
                <td class="product-quantity">
                  <label for="quantity-select" class="select-label">
                    <select class="styled-drop-down"  id="quantity-select" name="quantity-select">
                      <option selected="selected">1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </label>                
                </td>
                <td class="product-total">
                  $220.00
                </td>
                <td class="product-remove">
                  <a href="#">X</a>
                </td>
              </tr> 
              <!-- end: cart item -->
  
              <!-- start: cart item -->
              <tr class="cart-item">
                <td class="product-thumbnail">
                  <a href="product.html"><img src="images/cart-image-3.jpg"></a>
                </td>
                <td class="product-description">
                  <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                  <p>
                    Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.                  
                  </p>                
                  <p>
                    <strong>Size:</strong> XS<br />
                    <strong>Color:</strong> Black &amp; gray<br />
                    <strong>Type:</strong> Slim
                  </p>
                </td>
                <td class="product-price">
                  $220.00
                </td>
                <td class="product-quantity">
                  <label for="quantity-select" class="select-label">
                    <select class="styled-drop-down"  id="quantity-select" name="quantity-select">
                      <option selected="selected">1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </label>                
                </td>
                <td class="product-total">
                  $220.00
                </td>
                <td class="product-remove">
                  <a href="#">X</a>
                </td>
              </tr> 
              <!-- end: cart item -->
  
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
                  <span>Subtotal:</span> $780.00
                </td>
                <td class="cart-shipping">
                  <span>Shipment:</span> $25.00
                </td>
                <td class="cart-total">
                  <span>Total to pay:</span> $805.00
                </td>
                <td class="cart-submit">
                  <input type="submit" class="cart-submit" name="cart-submit" value="Finalize and pay" />
                </td>
              </tr>
              </tbody>         
            </table>
            <!-- end: cart summary -->   
  
  
          </form>
          <!-- end: cart form -->
          </div>
  
  
        </div>
      </section>
      <!-- end: main content -->

@endsection
    