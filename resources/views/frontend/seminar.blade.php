@extends('layouts.master')

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('roberto/img/bg-img/IMG_20191119_061710.jpeg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Seminar</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('roberto/img/bg-img/IMG_20191119_061710.jpeg')}}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('roberto/img/bg-img/IMG_20191119_061637.jpeg')}}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('roberto/img/bg-img/IMG_20191018_134155.jpg')}}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('roberto/img/bg-img/3323.jpg')}}" class="d-block w-100" alt="">
                                    </div>

                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                        <img src="{{asset('roberto/img/bg-img/IMG_20191119_061710.jpeg')}}" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                        <img src="{{asset('roberto/img/bg-img/IMG_20191119_061637.jpeg')}}" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                        <img src="{{asset('roberto/img/bg-img/IMG_20191018_134155.jpg')}}" class="d-block w-100" alt="">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                        <img src="{{asset('roberto/img/bg-img/3323.jpg')}}" class="d-block w-100" alt="">
                                    </li>

                                </ol>
                            </div>
                        </div>



                        <p>Seminar yang kami suguhkan adalah "Digital Drawing" dan "Modelling."
                        Digital Drawing adalah salah satu cara dalam menggambar yang dewasa ini paling banyak digemari. Digital Drawing itu juga adalah cara menggambar dengan menggunakan sentuhan komputer. Perkembangan teknologi pada saat ini membuat banyak aplikasi-aplikasi/perangkat lunak (Software) untuk menggambar secara digital.
                        Diantaranya, yang paling banyak digunakan penggambar Digital Drawing adalah:
                        </p>

                        <ul>
                            <li><i class="fa fa-check"></i>     Adobe Photoshop</li>
                            <li><i class="fa fa-check"></i>     Adobe Illustrator.</li>
                            <li><i class="fa fa-check"></i>     Easy Paint Tool SAI</li>
                            <li><i class="fa fa-check"></i>     Microsoft Paint</li>
                            <li><i class="fa fa-check"></i>     Paint.NET</li>
                            <li><i class="fa fa-check"></i>     InkScape</li>
                             <li><i class="fa fa-check"></i>    MyPaint, dll.</li>
                        </ul>

                        <p>3D Modelling adalah proses untuk menciptakan objek 3D yang ingin di tuangkan dalam bentuk visual nyata, baik secara bentuk, tekstur, dan ukuran objeknya. Pengertian lainnya adalah sebuah teknik dalam komputer grafis untuk memproduksi representasi digital dari suatu objek dalam tiga dimensi (baik benda mati maupun hidup).
                        </p>
                        <ul>
                            <p>Fasilitas yang akan Anda dapatkan :</p>
                            <li><i class="fa fa-check"></i>VR</li>
                            <li><i class="fa fa-check"></i>Tour Studio SMK RUS</li>
                            <li><i class="fa fa-check"></i>3D Modeling</li>
                            <li><i class="fa fa-check"></i> Digital Drawing</li>
                    </div>



                    <!-- Room Review -->
                        <div class="room-review-area mb-100">
                            <!-- <h4>Room Review</h4> -->



                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="{{url('store')}}" method="post">
                          @csrf
                          <input type="text" class="input-small form-control" name="paket" value="Seminar" hidden>
                          <div class="form-group mb-30">
                          <label for="Nama">Nama</label>
                              <div class="row no-gutters">
                                  <div class="col-15">
                                      <input type="text" class="input-small form-control" name="nama" placeholder="*Nama">
                                  </div>
                              </div>
                            </div>
                            <div class="form-group mb-30">
                            
                                <label for="checkInDate">Tanggal</label>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <input type="date" class="input-small form-control" name="tanggal" id="checkInDate" placeholder="Pilih Tanggal">
                                        </div>

                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Jumlah Orang *</label>
                                <div class="row">
                                    <div class="col-6">
                                                <input type="text" class="input-small form-control" name="jumlahanak" placeholder="*Anak-Anak">

                                    </div>
                                    <div class="col-6">

                                         <input type="text" class="input-small form-control" name="jumlahdewasa" placeholder="*Dewasa">
                                    </div>
                                    <div class="form-group mb-110">
                                            <label for="Asal">Asal Rombongan</label>
                                                <div class="row no-gutters">
                                                    <div class="col-15">
                                                        <input type="text" class="input-small form-control" name="asal" placeholder="*Asal Rombongan">
                                                    </div>
                                                </div>
                                </div>
                                  <div class="form-group mb-30">
                                <label for="Email">Email</label>
                                <div class="row no-gutters">
                                  <div class="col-15">
                                    <input type="text" class="input-small form-control" name="email" placeholder="*Email">
                                  </div>
                                </div>
                              </div>
                                  <div class="form-group mb-30">
                                    <label for="notelpon">NO telpon</label>
                                    <div class="row no-gutters">
                                      <div class="col-15">
                                        <input type="text" class="input-small form-control" name="notelpon" placeholder="*No telpon">
                                      </div>
                                    </div>
                                  </div>

                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100"><a>Pesan Sekarang</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Rooms Area End -->

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('roberto/img/bg-img/1.jpg')}});">
                <div class="row align-items-center">
                    <div class="col-12 col-md-12">
                        <div class="cta-text mb-50">
                            <h6 style="text-align: center;">Copyright ©, 2019 RPL RUS Web Dev</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->



    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{ asset('roberto/js/jquery.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('roberto/js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('roberto/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins -->
    <script src="{{ asset('roberto/js/roberto.bundle.js') }}"></script>
    <!-- Active -->
    <script src="{{ asset('roberto/js/default-assets/active.js') }}"></script>
</body>

</html>
@endsection
