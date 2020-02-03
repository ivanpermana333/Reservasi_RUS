<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bookings = Booking::all();
      return view ('Admin.table', compact('bookings'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.utama');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $request->validate([
      //     'Nama' => 'require',
      //     'tanggal' => 'required',
      //     'jumlahpesertaanak' => 'required',
      //     'jumlahpesertadewasa' => 'required',
      //     'alamat' => 'required',
      //     'email' => 'required',
      //     'notelpon' => 'required',
      
      // ]);

      $new_booking = new Booking;
      $new_booking->Nama = $request->nama;
      $new_booking->tanggal = $request->tanggal;
      $new_booking->jumlahpesertaanak = $request->jumlahanak;
      $new_booking->jumlahpesertadewasa = $request->jumlahdewasa;
      $new_booking->alamat = $request->asal;
      $new_booking->email = $request->email;
      $new_booking->notelpon = $request->notelpon;
      $new_booking->save();
      return redirect('/')->with('status', 'Silahkan menunggun konfirmasi dari admin');;

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
      //notif email
         $nama = $booking->Nama;
         $email = $booking->email;
         
         $kirim = Mail::to($email)->send(new SendMail($nama));
        if($kirim){         echo "Email telah dikirim";     } 
        return redirect('/table')->with('status', 'Sudah Tersetujui :)');;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
      }


}
