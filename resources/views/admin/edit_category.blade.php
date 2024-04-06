<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>editcategory</title>
</head>
<body>
  <div>
    <h1>edit category</h1>
<form action="{{route("diplomas.update",$category->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method("put")

  <div class="mb-3">
    <label for="category_name" class="form-label">name</label>
    <input type="text" class="form-control" id="category_name" name="name">
  </div>
 
  <div class="mb-3">
    <label for="category_price" class="form-label">price</label>
    <input type="text" class="form-control" id="category_price" name="price">
  </div>
  <div class="mb-3">
    <label for="category_duration" class="form-label">duration</label>
    <input type="text" class="form-control" id="category_duration" name="duration">
  </div>
    <div class="mb-3">
    <label for="category_image" class="form-label">category image</label>
    <input type="file" class="form-control" id="category_image" name="photo">
  </div>
  {{-- @foreach ($courses as $course)
  <input type="checkbox" id="{{$course->id}}" name="{{$course->id}}" value="{{$course->name_course}}">
  <label for="{{$course->id}}">{{$course->name_course}}</label><br>
  @endforeach --}}
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>