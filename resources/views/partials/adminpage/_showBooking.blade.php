<table>
  <thead>
    <tr>
      <th>user name</th>
      <th>email</th>
      <th>phone</th>
      <th>category name</th>
      <th>category price</th>
      <th>payment status</th>
      <th>booking status</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bookings as $booking)
  <tr>
    <td> {{$booking->name_user}}</td>
    <td> {{$booking->email}}</td>
    <td> {{$booking->phone}}</td>
    <td> {{$booking->category_name}}</td>
    <td> {{$booking->category_price}}</td>
    <td> {{$booking->payment_status}}</td>
    <td> {{$booking->booking_status}}</td>

    <td class="action">         
      <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$booking->id}}">delete</button>

    </td>
    
  </tr>
  <div class="modal fade" id="exampleModal{{ $booking->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $booking->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          are you sure
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route("bookings.destroy",$booking->id)}}" method="post" style="display: inline">
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


