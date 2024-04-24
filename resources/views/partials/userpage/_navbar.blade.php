<nav class="navb">
  <div class="nav-page">
    <a class="navb-brand" href="{{ route('mainhome')}}"><img src="{{asset('image/logo/logo.png')}}" /> </a>
    <div class="navb-container navb-collapse" id="nav-list">
      <ul class="nav-list">
        <li class="nav-list__item">
          <a class="nav-list__link active" aria-current="page" href="{{ route('mainhome') }}">home</a>
        </li>
        <li class="nav-list__item">
          <a class="nav-list__link active" aria-current="page" href="#diplomas">courses</a>
        </li>
        <li class="nav-list__item">
          <a class="nav-list__link active" aria-current="page" href="{{ route('about') }}">about</a>
        </li>
        <li class="nav-list__item">
          <a class="nav-list__link" href="#services">Services</a>
        </li>
        <li class="nav-list__item">
          <a class="nav-list__link" aria-current="page" href="#">gallery</a>
        </li>
        <li class="nav-list__item">
          <a class="nav-list__link" href="{{ route('show_cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        @if (Route::has('login'))
          @auth
            <li class="nav-list__item">
              
              <form action="{{route('logout')}}" method="post"  >
                @csrf
                @method('POST')
                <input type="submit" value="logout" class="nav-list__link">
              </form>

            </li>
          @else
            <li class="nav-list__item">
              <a class="nav-list__link" href="{{ route('login') }}">login</a>
            </li>
            <li class="nav-list__item">
              <a class="nav-list__link" href="{{ route('register') }}">rejester</a>
            </li>
          @endauth
        @endif        
      </ul>
    </div>
    <div id="menu-bar" class="">
      <i class="fa-solid fa-bars"></i>
    </div>
  </div>
</nav>