@extends('Admin.master')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

  <div class="container-fluid">
     <!-- <a class ="btn btn-primary m-2 float-right" href="/form">Tambah Paket</a> -->
     <div class="clearfix"></div>
<!-- DataTales Example -->

         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
           </div>
           
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="70%" cellspacing="0">

                 <thead>
                   <tr>
                     <th>Nama</th>
                     <th>jumlahanak</th>
                     <th>jumlahdewasa</th>
                     <th>tanggal</th>
                     <th>alamat</th>
                     <th>email</th>
                     <th>notelpon</th>
                     <th>Paket</th>
                     <th>Status</th>
                     <th>MoreInfo</th>
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
                     <td>{{$boking->paket}}</td>
                     <td>
                         @if($boking->status == 'pending')
                       <a  class ="btn btn-success  btn-sm" href="/terima/{{$boking->id}}">Terima</a>
                       <form action="/tolak/{{$boking->id}}" method="post" class="d-inline">
                         @method('delete')
                         @csrf
                         <span>
                             <button  type="submit" class="btn btn-danger btn-sm">Tolak</button>
                          </span>
                        </form>
                        @else
                        {{$boking->status}}
                        @endif
                      </td>
                      <td><a  class ="btn btn-primary  btn-sm" href="/detail/{{$boking->id}}">Detail</a></td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
         </div>
@endsection
