<section class="instructors" id="instructor">
  <div class="container">
    <div class="instructors__head">
      <h2><span>our</span> instructor</h2>
    </div>
    <div class="instructors__wrapper">
      <i class="fa-solid fa-chevron-right  arrow-right wrapper__arrow" id="right-arrow"></i>
      <i class="fa-solid fa-chevron-left  arrow-left wrapper__arrow" id="left-arrow"></i>
      <ul class="carousel instructors__carousel" >
        @foreach ( $instructors as $instructor)
        <li >
          <div class="instructors__card">
            <div class="instructors__card__img">
              <img src="{{asset("{$instructor->image}")}}" alt="" />
            </div>
            <div class="instructors__card__dec">
              <h4>{{$instructor->instructor_name}}</h4>
              <p>{{$instructor->job}}</p>
              <span>{{$instructor->experience}}</span>

            </div>

          </div>
        </li>  
        @endforeach
      </ul>
    </div>
  </div>
</section>