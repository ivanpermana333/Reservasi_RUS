@extends('Admin.master')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
     <a class ="btn btn-primary m-2 float-right" href="/form">Tambah Paket</a>
     <div class="clearfix"></div>
<!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                 <thead>
                   <tr>
                     <th>Nama</th>
                     <th>jumlahanak</th>
                     <th>jumlahdewasa</th>
                     <th>tanggal</th>
                     <th>alamat</th>
                     <th>email</th>
                     <th>notelpon</th>
                     <th>Status</th>
                  </tr>
                 </thead>
                 <tbody>
                    @foreach($bookings as $boking)
                   <tr>
                     <td>{{$boking->Nama}}</td>
                     <td>{{$boking->jumlahpesertaanak}}</td>
                     <td>{{$boking->jumlahpesertadewasa}}</td>
                     <td>{{$boking->tanggal}}</td>
                     <td>{{$boking->alamat}}</td>
                     <td>{{$boking->email}}</td>
                     <td>{{$boking->notelpon}}</td>
                     <td><a class ="btn btn-success" href="/terima/{{$boking->id}}">Terima</a></td>
                     <!-- <td>

                        <form action="/delete/{{ $errors-> id}}" method="post" class="d-inline">
                             @method('delete')
                             @csrf
                             <button type="submit" class="btn btn-danger"> Delete </button>
                         </form>
                         <a class ="btn btn-primary" href="/edit/{{ $errors-> id}}">Edit</a>
                       </td> -->
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
@endsection
