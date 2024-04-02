<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
 

  <h1>user page(home)</h1>
</body>
</html>