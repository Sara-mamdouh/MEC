<section class="admin-container">
  <div class="show-category">
    <h2><span>c</span>ategories</h2>
    <table>
      <thead>
        <tr>
          <th>category name</th>
          <th>price</th>
          <th>duration</th>
          <th >image</th>
          <th>courses</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorys as $category)
      <tr>
        <td> {{$category->category_name}}</td>
          <td> {{$category->price}}</td>
        <td> {{$category->duration}}</td>
        <td> <img src="{{asset("{$category->image}")}}" alt="" /></td>
        <td> 
          @foreach($category->courses as $course)
          <span>{{ $course->name_course }} /</span>
          @endforeach

        </td>
        <td class="action">         
          <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$category->id}}">delete</button>

          <a href="{{ route("diplomas.edit",$category->id)}}" class="btn btn-outline-success">edit</a>

        </td>
        
      </tr>
      <div class="modal fade" id="exampleModal{{ $category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $category['id'] }}" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              are you sure
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form action="{{route("diplomas.destroy",$category->id)}}" method="post" style="display: inline">
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
  </div>
 
</section>





