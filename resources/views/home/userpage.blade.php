<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css','public/scss/app.scss','resources/js/app.js'])
  <title>Document</title>
</head>
<body>
  @if (Route::has('login'))
    @auth
      {{-- <a href="{{ route('login') }}">logout</a> --}}
      <x-app-layout>
      </x-app-layout>


    @else
      <a href="{{ route('login') }}">login</a>
      <a href="{{ route('register') }}">register</a>
      
    @endauth
  @endif
 
<div class='ll'>
  <h1 >user page(home)</h1>

</div>
</body>
</html>