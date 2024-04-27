
<table>
  <thead>
    <tr>
      <th>instructor name</th>
      <th>jop</th>
      <th>experience</th>
      <th>image</th>
      <th>category</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($instructors as $instructor)
  <tr>
    <td> {{$instructor->instructor_name}}</td>
    <td> {{$instructor->job}}</td>
    <td> {{$instructor->experience}}</td>
    <td> <img src="{{asset("storage/{$instructor->image}")}}" alt="" /></td>

    <td> {{$instructor->category ? $instructor->category->category_name:"noExist"}}</td>

    <td>         
      <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$instructor->id}}">delete</button>

      <a href="{{ route("instructors.edit",$instructor->id)}}" class="btn btn-outline-success">edit</a>

    </td>
    
  </tr>
  <div class="modal fade" id="exampleModal{{ $instructor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$instructor['id']}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          are you sure
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route("instructors.destroy",$instructor->id)}}" method="post" style="display: inline">
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





