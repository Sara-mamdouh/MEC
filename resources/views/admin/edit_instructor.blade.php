<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>edit-instractor</title>
</head>
<body>
  <div>
    <h1>edit instractor</h1>
<form action="{{route("instructors.update",$instructor->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method("put")

  <div class="mb-3">
    <label for="instructor_name" class="form-label">name</label>
    <input type="text" class="form-control" id="instructor_name" name="name" value="{{ $instructor->instructor_name}}">
  </div>
 
  <div class="mb-3">
    <label for="instructor_job" class="form-label">price</label>
    <input type="text" class="form-control" id="instructor_job" name="job" value="{{ $instructor->job}}">
  </div>
  <div class="mb-3">
    <label for="instructor_experience" class="form-label">experience</label>
    <input type="text" class="form-control" id="instructor_experience" name="experience" value="{{$instructor->experience}}">
  </div>
  <div class="mb-3">
    <label for="instructor_image" class="form-label">instructor image</label>
    <input type="file" class="form-control" id="instructor_image" name="photo">
  </div>
  <select id="" name="category" >
    @foreach ($categorys as $category)

    <option @selected($category->id == $instructor->category_id) value="{{$category->id}}">
    {{$category->category_name}}
    </option>
    @endforeach
  </select>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>