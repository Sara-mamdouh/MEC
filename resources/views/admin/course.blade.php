<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>course</title>
</head>
<body>
  <div>
    <h1>add course</h1>
    <form action="{{ route('courses.store') }}" method="post">
      @csrf

      <div class="mb-3">
        <label for="courses_name" class="form-label">name</label>
        <input type="text" class="form-control" id="courses_name" name="name">
      </div>
     
      <div class="mb-3">
        <label for="courses_topics" class="form-label">topics</label>
        <input type="text" class="form-control" id="courses_topics" name="topics">
      </div>
      
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
<hr>

  <div>
    <table>
      <tr>
        <td>corse name</td>
      </tr>
      @foreach ($courses as $course)
      <tr>
        <td> {{$course->name_course}}</td>
        <td>         
          <form action="{{ route("courses.destroy",$course->id)}}" method="post" style="display: inline">
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