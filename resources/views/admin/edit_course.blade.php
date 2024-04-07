<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>edit-course</title>
</head>
<body>
  <div>
    <h1>edit course</h1>
<form action="{{route("courses.update",$course->id)}}" method="post" >
  @csrf
  @method("put")

  <div class="mb-3">
    <label for="course_name" class="form-label">name</label>
    <input type="text" class="form-control" id="course_name" name="name" value="{{ $course->name_course}}">
  </div>
 
  <div class="mb-3">
    <label for="course_topics" class="form-label">topics</label>
    <input type="text" class="form-control" id="course_topics" name="topics" value="{{ $course->topics}}">
  </div>
 

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>