@extends('layouts.master')

@section('content')


    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url({{asset('roberto/img/bg-img/20191108_111501.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title">Hubungi Kami</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>-->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Google Maps & Contact Info Area Start -->
    <section class="google-maps-contact-info">
        <div class="container-fluid">
            <div class="google-maps-contact-content">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Telepon</h4>
                            <p>(0291) 430202</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Alamat</h4>
                            <p>Jl. Sukun Raya Jl. Bae-Besito No.09, Besito Kulon, Besito, Kec. Gebog, Kabupaten Kudus, Jawa Tengah 59333</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Waktu Buka</h4>
                            <p>7:00 WIB - 21:00 WIB</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p>reservasi.rus@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
            <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1318907681602!2d110.84063491433574!3d-6.753765967917434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70db068724fae7%3A0x7610925ddad70c54!2sSMK%20Raden%20Umar%20Said!5e0!3m2!1sid!2sid!4v1574221126901!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
             </div>
        </div>
    </section>
    <!-- Google Maps & Contact Info Area End -->



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
  @endsection
