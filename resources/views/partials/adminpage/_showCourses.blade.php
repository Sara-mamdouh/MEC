<table>
  <thead>
    <tr>
      <th>course name</th>
      <th>topics</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($courses as $course)
  <tr>
    <td> {{$course->name_course}}</td>
    <td> {{$course->topics}}</td>
    <td>         
      <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$course->id}}">delete</button>

      <a href="{{ route("courses.edit",$course->id)}}" class="btn btn-outline-success">edit</a>

    </td>
    
  </tr>
  <div class="modal fade" id="exampleModal{{ $course->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$course['id']}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          are you sure
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route("courses.destroy",$course->id)}}" method="post" style="display: inline">
            @csrf
            @method("delete")
            <input type="submit" value="Delete" class="btn btn-danger">
  
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  </tbody>
  
</table>
