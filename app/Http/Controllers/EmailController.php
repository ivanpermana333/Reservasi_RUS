<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
     {
         $nama = $bookings->Nama;
         $email = $bookings->email;
         $kirim = Mail::to($email)->send(new SendMail($nama));
     if($kirim){         echo "Email telah dikirim";     } }
}
