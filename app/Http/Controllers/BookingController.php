<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    //
    public function index(Request $request){
        
        $bookings = Booking::latest()->filter($request->query)->paginate(6);
      
        if($request->has('q')){
            return view("partials.adminpage._showBooking",["bookings" => $bookings])->render();
        }else{
            return view("admin.booking",["bookings" => $bookings]);

        }
        
    }
    public function destroy($bookingID){
        $bookingId = Booking::find($bookingID);
        

        $bookingId->delete();
        return to_route("bookings.index");

        
    }
}
