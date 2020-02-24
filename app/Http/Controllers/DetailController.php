<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
        $bookings = Booking::all();
        return view('Admin.detail', compact('bookings'));
    }

  
    public function show(Booking $booking)
    {

  
    }

   
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
