@extends('home.layout.master')
@section('content')
    <div class="heading-banner-area overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-banner">
                        <div class="heading-banner-title">
                            <h2></h2>
                        </div>
                        <div class="breadcumbs pb-15">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-area  pt-80 pb-80">
        <div class="container">
            <div class="contact-us customer-login bg-white">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-details">
                            <h4 class="title-1 title-border text-uppercase mb-30">contact details</h4>
                            <ul>
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <span>Jl Makam Gusdur Diwek,</span>
                                    <span>Jombang, Jawa Timur</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-phone"></i>
                                    <span>082313509636</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 mt-xs-30">
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/@-7.6133519,112.2283083,15z?entry=ttu" width=100% height=600px; style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
