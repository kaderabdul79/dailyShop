<!-- start: header -->
    <header class="header">
        <div class="row max-inner">
            
          <div class="columns col-2">
            <a href="{{route('home-page')}}" title="Indigo" class="logo">Daily Shop</a>
          </div>
  
          <div class="columns col-4">
            <a href="#" class="toggle-nav">
              <i class="fa fa-bars"></i> Menu
            </a>
            <nav class="main-nav">
              <ul>
                <li><a href="{{route('shop-page')}}">Shop</a></li>
                <li><a href="{{route('cart.show-cart')}}">Cart</a></li>
              </ul>
            </nav>
          </div>
  
          <div class="columns col-6">
            <ul class="header-controls">
              <li class="header-search">
                <a href="#" class="reveal-search">
                  <i class="fa fa-search"></i> Search
                </a>
                <div class="search-wrapper">
                  <form class="search-form">
                      <input placeholder="Search..." type="text">
                  </form>                
                </div>
              </li>
              <li class="header-cart">
                <a href="cart.html" title="view cart">
                  <span class="fa fa-shopping-cart"></span>
                  <span class="cart-count">3 Products,</span>
                  <span class="cart-amount">$780.00</span>
                </a>                
              </li>
              <li class="header-actions">
                <a href="{{url('admin/login')}}" title="Log out"><span class="fa fa-lock"></span>Admin Login</a>
              </li>
            </ul>
          </div>
  
        </div>
      </header>
      <!-- end: header -->