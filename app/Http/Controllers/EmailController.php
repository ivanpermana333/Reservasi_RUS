<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TerimaMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
     {
         $nama = $bookings->Nama;
         $email = $bookings->email;
         $tgl = $booking->tanggal;
         $dewasa = $booking->jumlahdewasa;
         $anlak = $booking->jumlahanak;
         $paket = $booking->paket;
         $kirim = Mail::to($email)->send(new TerimaMail($nama));
     if($kirim){         echo "Email telah dikirim";     } }
}
