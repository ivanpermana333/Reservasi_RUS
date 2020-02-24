@extends('Admin.master')

@section('content')
<div class="card">
  <h5 class="card-header">Detail</h5>
  <div class="card-body">
  @foreach($bookings as $booking)
    <p class="card-text">Nama :{{$booking->Nama}}<br/>Jumlah Dewasa :{{$booking->jumlahpesertadewasa}}<br/>Jumlah Anak :{{$booking->jumlahpesertaanak}}<br/>Tanggal :{{$booking->tanggal}}<br/>Alamat :{{$booking->alamat}}<br/>Email:{{$booking->email}}<br/>Notelpon :{{$booking->notelpon}}<br/></p>
   @endforeach
    @if($booking->status == 'pending')
    <a href="#" class="btn btn-success">Terima</a>
    <a href="#" class="btn btn-danger">Tolak</a>
    @else
    {{$booking->status}}
    @endif
  </div>
</div>
@endsection