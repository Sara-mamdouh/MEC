<aside class="sidebar">
  <div class="sidebar__top">
    <div class="logo">
      <a class="navbar-brand" href="{{ route('mainhome')}}"><img src="{{asset('image/logo/logo.png')}}" /> </a>
    </div>
    <i class="fa-solid fa-bars bars" id="bars"></i>
  </div>
  <ul class="sidebar__menu">
    <li>
      <a href="{{route('categories.index')}}">
        <i class="fa-solid fa-layer-group"></i>
        <span class="sidebar__menu__item">catigory</span>
      </a>
      <span class="tooltip">catigory</span>
    </li>
    <li class="kk">
      <a href="{{route('courses.create')}}">
        <i class="fa-solid fa-laptop"></i>
        <span class="sidebar__menu__item">courses</span>
      </a>
      <span class="tooltip">courses</span>
     
    </li>
    <li>
      <a href="{{route('instructors.index')}}">
        <i class="fa-solid fa-users"></i>
         <span class="sidebar__menu__item">instractor</span>
      </a>
      <span class="tooltip">instractors</span>
    </li>
    <li>
      <a href="{{route('bookings.index')}}">
        <i class="fa-regular fa-file-lines"></i>
         <span class="sidebar__menu__item">booking</span>
      </a>
      <span class="tooltip">booking</span>
    </li>
    
    <li>
      <a href="###">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <form action="{{route('logout')}}" method="post" class="sidebar__menu__item" >
          @csrf
          @method('POST')
          <input type="submit" value="logout">
        </form>
      </a>
       <span class="tooltip">logout</span>

    </li>
  
  </ul>
</aside>

