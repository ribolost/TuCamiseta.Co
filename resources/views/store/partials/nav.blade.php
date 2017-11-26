<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <image class= "image-responsive" src ="/images/TuCamiseta.png">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand main-title" href="{{ route('home') }}">
        TuCamiseta.co
        
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">You use it, you create it</p> 
      <a class="button my-2 my-sm-0 navbar-right"  href="{{ route('login-get') }}" role="button" id="SignInBtn"><span>Sign In</span></a>
      <a class="navbar-brand navbar-right" href="{{ route('register-get') }}">Sign Up</a></li>
      <a class="navbar-brand navbar-right" href="#">About Us</a></li>

      <a class="navbar-brand navbar-right" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>

    </div>
  </div>
  <ul class="nav navbar-nav">
    <li class="navbar-brand dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="ArtistasDM"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Artists<span class="caret"></span>
    </a>
      <div class="dropdown-menu" aria-labelledby="ArtistasDM">
          <a class="dropdown-item" href="#">More Rated</a>
          <a class="dropdown-item" href="#">Contact Them</a>
          <a class="dropdown-item" href="#">Coming Soon</a>
        </div>
      </li>

      <li class="navbar-brand dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="ArtistasDM"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Designs<span class="caret"></span>
      </a>
        <div class="dropdown-menu" aria-labelledby="ArtistasDM">
            <a class="dropdown-item" href="#">Top Designs</a>
            <a class="dropdown-item" href="#">Create Your T-Shirt</a>
            <a class="dropdown-item" href="#">Coming Soon</a>
          </div>
        </li>

    <li class="navbar-brand"><a href="#" >Prints</a></li>
    <li class="navbar-brand"><a href="#">Page 3</a></li>
  </ul>
</nav>
