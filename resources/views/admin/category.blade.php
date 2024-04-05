<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>catagory</title>
</head>
<body>
  <div>
    <h1>add category</h1>
    
<form action="{{ route('diplomas.store') }}" method="post"  enctype="multipart/form-data">
  @csrf
  
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
  @foreach ($courses as $course)
  <input type="checkbox" id="{{$course->id}}" name="{{$course->id}}" value="{{$course->name_course}}">
  <label for="{{$course->id}}">{{$course->name_course}}</label><br>
  @endforeach
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
<hr>
  <div>
    <table>
      <tr>
        <td>category name</td>
        <td>action</td>
      </tr>
      @foreach ($categorys as $category)
      <tr>
        <td> {{$category->category_name}}</td>
        <td>         
          <form action="{{ route("diplomas.destroy",$category->id)}}" method="post" style="display: inline">
            @csrf
            @method("delete")
            <button  class="btn btn-outline-danger">delete</button>
          </form>
        </td>
      </tr>
      @endforeach
     
    </table>

  
  
</body>
</html>