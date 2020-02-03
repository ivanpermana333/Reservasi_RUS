@extends('layouts.master')

@section('content')


    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('roberto/img/bg-img/IMG_20191118_152041.jpg')}});" data-img-url="img/bg-img/IMG_20191118_152041.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">SMK RADEN UMAR SAID</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">SELAMAT DATANG</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('roberto/img/bg-img/IMG_20191018_134332.jpg')}});" data-img-url="img/bg-img/IMG_20191018_134332.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">RESERVASI</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms">SMK Raden Umar Said</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('roberto/img/bg-img/IMG_20191018_135135.jpg')}});" data-img-url="img/bg-img/IMG_20191018_135135.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">RESERVASI</h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">SMK Raden Umar Said</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
  <!-- <section class="roberto-about-area section-padding-100-0">


        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>Tentang Kami</h6>
                        <h2>Reservasi SMK RUS</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">Tour Visit RUS akan mengajak anda untuk melihat
                            sekolah dengan fasilitas belajar yang berstandar
                            internasional. Para murid diberi pembelajaran oleh
                            guru yang berkompeten dan mentor yang memiliki
                            hard dan soft skill yang tidak perlu diragukan lagi.
                            Dengan tenaga profesional dan fasilitas berkelas,
                            Anda akan mendapatkan pengalaman yang berkesan
                            bagi Anda.</h5>

                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="{{asset('roberto/img/bg-img/grafika-kudus1.jpg')}}" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="{{asset('roberto/img/bg-img/IMG_20191018_135135.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="{{asset('roberto/img/bg-img/3DLUTmobile_20190912_083335.jpeg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section> -->
    <section class="roberto-about-area section-padding-100-0">
       <div class="container mt-100">
           <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                   <!-- Section Heading -->
                   <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                       <h6>Tentang Kami</h6>
                       <h2>Reservasi SMK RUS</h2>
                   </div>
                   <div class="about-us-content mb-100">
                       <h5 class="wow fadeInUp" data-wow-delay="300ms">Tour Visit RUS akan mengajak anda untuk melihat
                           sekolah dengan fasilitas belajar yang berstandar
                           internasional. Para murid diberi pembelajaran oleh
                           guru yang berkompeten dan mentor yang memiliki
                           hard dan soft skill yang tidak perlu diragukan lagi.
                           Dengan tenaga profesional dan fasilitas berkelas,
                           Anda akan mendapatkan pengalaman yang berkesan
                           bagi Anda.</h5>
                       <!-- <p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Michen Taylor</span></p>
                       <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms"> -->
                   </div>
               </div>

               <div class="col-12 col-lg-6">
                   <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                       <div class="row no-gutters">
                           <div class="col-6">
                             <div class="single-thumb">
                                 <img src="{{asset('roberto/img/bg-img/grafika-kudus1.jpg')}}" alt="">
                             </div>
                             <div class="single-thumb">
                                 <img src="{{asset('roberto/img/bg-img/IMG_20191018_135135.jpg')}}" alt="">
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="single-thumb">
                                 <img src="{{asset('roberto/img/bg-img/3DLUTmobile_20190912_083335.jpeg')}}" alt="">
                             </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
    <!-- About Us Area End -->

    <!-- Service Area Start -->
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->

    <!-- Our Room Area Start -->
    <section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('roberto/img/bg-img/IMG_20191018_135135.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Tour Visit</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">Biaya <span>/ orang</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Anak-Anak</span> <span>: RP20.000</span></li>
                        <li><span><i class="fa fa-check"></i> Dewasa</span> <span>: RP40.000</span></li>
                    </ul>
                    <h3 data-animation="fadeInUp" data-delay="300ms">Fasilitas <span></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> VR</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Tour Studio SMK RUS</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Snack</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Marchandise</span> <span></span></li>
                    </ul>
                    <a href="/tourvisit" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Lihat Detail</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('roberto/img/bg-img/IMG_20191018_134630.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Tour Visit + Nonton</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">Biaya <span>/ orang</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> Anak-Anak</span> <span>: RP20.000</span></li>
                        <li><span><i class="fa fa-check"></i> Dewasa</span> <span>: RP40.000</span></li>
                    </ul>
                    <h3 data-animation="fadeInUp" data-delay="300ms">Fasilitas <span></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> VR</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Tour Studio SMK RUS</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Snack</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Marchandise</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Nonton Bareng di Studio SMK RUS</span> <span></span></li>
                    </ul>
                    <a href="/tournonton" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Lihat Detail</a>
                </div>
            </div>
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                    <!-- Thumbnail -->
                    <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('roberto/img/bg-img/IMG_20191119_061710.jpeg')}});"></div>

                    <!-- Content -->
                    <div class="room-content">
                        <h2 data-animation="fadeInUp" data-delay="100ms">Seminar</h2>
                        <h3 data-animation="fadeInUp" data-delay="300ms">Biaya <span></span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span><i class="fa fa-check"></i>/ jam </span> <span>: RP80.000</span></li>

                        </ul>
                        <h3 data-animation="fadeInUp" data-delay="300ms">Fasilitas <span></span></h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li><span><i class="fa fa-check"></i> VR</span> <span></span></li>
                            <li><span><i class="fa fa-check"></i> Tour Studio SMK RUS</span> <span></span></li>
                            <li><span><i class="fa fa-check"></i> 3D Modeling</span> <span></span></li>
                            <li><span><i class="fa fa-check"></i> Digital Drawing</span> <span></span></li>
                            >
                        </ul>
                        <a href="/seminar" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Lihat Detail</a>
                    </div>
                </div>
        </div>
    </section>

  

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
@endsection
