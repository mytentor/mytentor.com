@extends('template.desain_front')
@section('content')
        <title>Mytentor - Solution for student</title>
            
        <link href="{{ asset('assets/assets/css/glide.core.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/assets/css/glide.theme.min.css') }}" rel="stylesheet">
    
        <style>
            @media (max-width: 768px) {
                .judul-home{margin-top: 50px;}
                .kedua{margin-top: 0;}
                .kedua-text{ margin-bottom: 50px; }                
            }
        </style>

        <div id="Glide" class="glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<"><i class="fa fa-angle-left"></i></button>
                <button class="glide__arrow next" data-glide-dir=">"><i class="fa fa-angle-right"></i></button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    <li class="glide__slide"><img src="http://placehold.it/1366x600" class="img-responsive"></li>
                    <li class="glide__slide"><img src="http://placehold.it/1366x600" class="img-responsive"></li>
                    <li class="glide__slide"><img src="http://placehold.it/1366x600" class="img-responsive"></li>
                </ul>
            </div>
            <div class="glide__bullets"></div>
        </div>

        <div id="first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="http://placehold.it/500x300" class="img-responsive">
                    </div>

                    <div class="col-md-6">
                        
                        <h2 class="judul-home text-center pertama">
                        Tanya Soal
                        
                    </h2>
                    <hr style="width: 100px; border:2px solid #ffc300;">
                        <p class="text-center teks-home pertama-text">Lorem ipsum dolor sit amet, atqui iriure discere vis ea, te cum falli omittantur, sed cu quidam malorum. Debet aeterno pertinax sed te, qui propriae corrumpit an.</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                        <h2 class="judul-home text-center kedua">
                        Akses &amp; Unduh Soal
                        
                    </h2>
                    <hr style="width: 100px; border:2px solid #1565c0;">
                        <p class="text-center teks-home kedua-text">Lorem ipsum dolor sit amet, atqui iriure discere vis ea, te cum falli omittantur, sed cu quidam malorum. Debet aeterno pertinax sed te, qui propriae corrumpit an.</p>
                    </div>

                    <div class="col-md-6">
                        <img src="http://placehold.it/500x300" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>


        <div id="third">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <img src="http://placehold.it/500x300" class="img-responsive">
                    </div>


                    <div class="col-md-6">
                        
                        <h2 class="judul-home text-center ketiga">
                        Ujian Online
                        
                    </h2>
                    <hr style="width: 100px; border:2px solid #ffc300;">
                        <p class="text-center teks-home ketiga-teks">Lorem ipsum dolor sit amet, atqui iriure discere vis ea, te cum falli omittantur, sed cu quidam malorum. Debet aeterno pertinax sed te, qui propriae corrumpit an.</p>
                    </div>

                    
                </div>
            </div>
        </div>

        <div id="testimoni">
            <div class="container">
                <div class="row">

                    <h2 class="text-center" style="margin-bottom: 30px; letter-spacing: 1px;">Apa kata mereka?</h2>

                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-body text-center">
                                
                                <img src="http://placehold.it/100x100" class="testi-img img-circle" alt="img-orang">
                                <h5 class="testi-nama"><b>Roland Mc.Cartney</b></h5>

                                <p class="testi-text"><i>"Lorem ipsum dolor sit amet, atqui iriure discere vis ea, te cum falli omittantur, sed cu quidam malorum. Debet aeterno pertinax sed te, qui propriae corrumpit an."</i></p>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-body text-center">
                                
                                <img src="http://placehold.it/100x100" class="testi-img img-circle" alt="img-orang">
                                <h5 class="testi-nama"><b>Roland Mc.Cartney</b></h5>

                                <p class="testi-text"><i>"Lorem ipsum dolor sit amet, atqui iriure discere vis ea, te cum falli omittantur, sed cu quidam malorum. Debet aeterno pertinax sed te, qui propriae corrumpit an."</i></p>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-body text-center">
                                
                                <img src="http://placehold.it/100x100" class="testi-img img-circle" alt="img-orang">
                                <h5 class="testi-nama"><b>Roland Mc.Cartney</b></h5>

                                <p class="testi-text"><i>"Lorem ipsum dolor sit amet, atqui iriure discere vis ea, te cum falli omittantur, sed cu quidam malorum. Debet aeterno pertinax sed te, qui propriae corrumpit an."</i></p>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="{{ asset('assets/assets/js/glide.min.js') }}"></script>
        <script>
        $("#Glide").glide({
            type: "carousel"
        });
        </script>
@endsection