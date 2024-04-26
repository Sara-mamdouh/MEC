<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("fontawesome-free-6.5.2-web/css/all.min.css")}}">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  @vite(['resources/css/app.css','public/scss/app.scss','resources/js/app.js'])
  <title>user page</title>
</head>
<body>
@include("partials.adminpage._sidebar")
@include("partials.adminpage._addCourses")


<section class="admin-container">
  <div class="show-category">
    <h2><span>c</span>ourses</h2>
    <div class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <form class="d-flex search" role="search" action="{{route("courses.create")}}" method="GET" onsubmit="handleSearch(event)">
          <input class="form-control me-2" placeholder="Search" aria-label="Search" name="q" onkeydown='fetchSearchResult(event)' id="data-search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div> 
    <div class="table-container">

      @include("partials.adminpage._showCourses")

    </div>
  </div>
  <div style="padding: 40px">
    {{$courses->links()}}
  </div>
</section>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="//unpkg.com/alpinejs" defer></script>

<script src="{{asset("js/main.js")}}"></script>

</body>
</html>
