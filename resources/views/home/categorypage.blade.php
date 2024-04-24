<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
  @vite(['resources/css/app.css','public/scss/app.scss','resources/js/app.js'])
  <title>user home</title>
</head>
<body>
{{-- @dd($courses) --}}
{{-- @dd($instructors) --}}

@include("partials.userpage._navbar")

<section class="title">
  <div>
    <h2>Course Details</h2>
    <p> home <span><i class="fa-solid fa-arrow-right"></i></span> category detalis</p>
  </div>
</section>
<main class="container">
<div class="category">
  <div class="category-content">
    <div class="category-content__img">
      <img src="{{asset("storage/{$category->image}")}}" alt="" />
    </div>
    <div class="category-content__dec">
      <ul>
        <li>diploma : <span>{{$category->category_name}} .</span></li>
        <li>duration : <span>{{$category->duration}} .</span></li>
        <li>price :<span>{{$category->price}} .</span></li>
        <li>courses :
            @foreach($courses as $course)
            <span>{{ $course->name_course }} .</span>
          

            @endforeach
        </li>
        <li>instructors : 
            @foreach($instructors as $instructor)
            <span>{{ $instructor->instructor_name }} .</span>
            <span>{{ $instructor->job }} .</span>
            @endforeach
        </li>

        <li><span>{{$category->description}}</span></li>

      </ul>
      <form method="POST" action="{{route("add_card",$category->id)}}">
        @csrf
      <input class="card__body__link" type="submit" value="Book now">
    </div>

  </div>
<div>
  
</div>
</div>
</main>
 
  

      
<script src="{{asset("js/main.js")}}"></script>

</body>
</html>