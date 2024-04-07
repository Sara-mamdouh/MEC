<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>instructor</title>
</head>
<body>
  <div>
    <h1>add instrutor</h1>
    
<form action="{{route('instructors.store') }}" method="post"  enctype="multipart/form-data">
  @csrf
  
  <div class="mb-3">
    <label for="instructor_name" class="form-label">name</label>
    <input type="text" class="form-control" id="instructor_name" name="name">
  </div>
 
  <div class="mb-3">
    <label for="instructor_job" class="form-label">job</label>
    <input type="text" class="form-control" id="instructor_job" name="job">
  </div>
  <div class="mb-3">
    <label for="instructor_experience" class="form-label">experience</label>
    <input type="text" class="form-control" id="instructor_experience" name="experience">
  </div>
    <div class="mb-3">
    <label for="instructor_image" class="form-label">instructor image</label>
    <input type="file" class="form-control" id="instructor_image" name="photo">
  </div>
<select id="" name="category">
  @foreach ($categorys as $category)

  <option value="{{$category->id}}">
    {{$category->category_name}}
  </option>
  @endforeach

</select>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
<hr>
  <div>
    <table>
      <tr>
        <td>instructors name</td>
        <td>jop</td>
      </tr>
      @foreach ($instructors as $instructor)
      <tr>
        <td> {{$instructor->instructor_name}}</td>
        <td> {{$instructor->job}}</td>
        <td>
          <a href="{{ route("instructors.edit",$instructor->id)}}" class="">edit</a>
        </td>
        <td>         
          <form action="{{ route("instructors.destroy",$instructor->id)}}" method="post" style="display: inline">
            @csrf
            @method("delete")
            <button  class="btn btn-outline-danger">delete</button>
          </form>
        </td>
      </tr>
      @endforeach
     
    </table>

  </div>
  
</body>
</html>