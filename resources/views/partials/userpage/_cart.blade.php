<section class="admin-container">
  <div class="show-category container">
    <h2><span>your</span> cart</h2>
    <table>
      <thead>
        <tr>
          <th>category name</th>
          <th>price</th>
          <th>action</th>
        </tr>
      </thead>

      <tbody>
        <?php $totalprice=0; ?>
        @foreach ($diplomas as $diploma)
      <tr>
        <td>{{$diploma->category_name}}</td>
        <td>{{$diploma->category_price}}</td>
        <td> 
          <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$diploma->id}}">delete</button>
        </td>
      </tr>

      <div class="modal fade" id="exampleModal{{ $diploma->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $diploma['id'] }}" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              are you sure
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form action="{{route("remove_cart",$diploma->id)}}" method="post" style="display: inline">
                @csrf
                @method("delete")
                <input type="submit" value="Delete" class="btn btn-danger">
      
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php $totalprice=$totalprice + $diploma->category_price; ?>

      @endforeach
    
      </tbody>
    </table>
    <div class="total-price">
      <h3><span>total price : </span> {{$totalprice}}</h3>
    </div>
    <div class="Payment">
      <h3>
        proceed  booking
      </h3>
      <a href="{{route("cash_booking")}}" class="btn btn-danger">Payment upon attendance</a>
      <a href="{{route("payment_online")}}" class="btn btn-danger">Pay using card</a>

    </div>
  </div>
 
</section>





