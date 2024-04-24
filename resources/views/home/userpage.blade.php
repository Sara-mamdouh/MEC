<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("fontawesome-free-6.5.2-web/css/all.min.css")}}">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
  @vite(['resources/css/app.css','public/scss/app.scss','resources/js/app.js'])
  <title>user page</title>
</head>
<body>
@include("partials.userpage._header")
@include("partials.userpage._services")
@include("partials.userpage._category",["categorys"=>$categorys])
@include("partials.userpage._gallery")
@include("partials.userpage._breakSection")
@include("partials.userpage._instructor",["instructors"=>$instructors])


  
@include("partials.userpage._footer")

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="{{asset("js/main.js")}}"></script>

</body>
</html>