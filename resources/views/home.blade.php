@extends('layouts.layout')

@section('title','home')

@section('body')


    <div class="container ht-slide">
        <div class="ht-slide_container">
            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide1.jpg" alt="Slid1">
            </div>
            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide2.jpg" alt="Slid2">
            </div>

            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide3.jpg" alt="Slid3">
            </div>

            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide4.png" alt="Slid4">
            </div>

            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide5.jpg" alt="Slid5">
            </div>

            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide6.jpg" alt="Slid6">
            </div>

            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide7.jpg" alt="Slid7">
            </div>

            <div class="ht-slide_child ht-slide_effect">
                <img src="images/slide/slide8.jpg" alt="Slid8">
            </div>
        </div>
    </div>



    <div class="ht-heading container">
        <div class="ht-heading_text p-0"><h3>PRODUCT GELLARY</h3></div>
        <hr>
    </div>

    <div class="ht-gallery container">

        <div class="row">
            <div class="col-3 pl-2">
                <div class="ht-gallery_style">
                    <img src="images/gallery/rooh-afza.jpg" alt="Rooh-afza">
                    <h6>Rooh Afza</h6>
                    <p>$20</p>

                </div>

            </div>
            <div class="col-3 pl-2 ">
                <div class="ht-gallery_style">
                    <img src="images/gallery/hermin.jpg" alt="Hermin">
                    <h6>Hermina</h6>
                    <p>$20</p>

                </div>

            </div>
            <div class="col-3  pl-2">
                <div class="ht-gallery_style">
                    <img src="images/gallery/safi.jpg" alt="Safi">
                    <h6>Safi</h6>
                    <p>$20</p>

                </div>

            </div>

            <div class="col-3  pl-2">
                <div class="ht-gallery_style">
                    <img src="images/gallery/suline.jpg" alt="Suline">
                    <h6>Suline</h6>
                    <p>$20</p>

                </div>

            </div>

            <div class="col-3  pl-2 pt-4">
                <div class="ht-gallery_style">
                    <img src="images/gallery/rooh-afza.jpg" alt="Rooh-afza">
                    <h6>Rooh Afza</h6>
                    <p>$20</p>

                </div>

            </div>

        </div>
        
    </div>

    <div class="ht-heading container">
        <div class="ht-heading_text p-0"><h3>OUR VESION</h3></div>
        <hr>
    </div>

    <div class="container">
        <div class="row vision_parent">
            <div class="col-3 vision_child">
                <div class="row p-3">
                    <div class="col-3">
                        <img src="images/icon1.png" alt="Free Deleviry">
                    </div>
                    <div class="col-9">
                        <h6>Free Delivery</h6>
                        <p>Over Amount of total $100</p>
                    </div>
                </div>
            </div>
             <div class="col-3 vision_child">
                <div class="row p-3">
                    <div class="col-3">
                        <img src="images/icon2.png" alt="Free Deleviry">
                    </div>
                    <div class="col-9">
                        <h6>Product Return</h6>
                        <p>If goods have problems</p>
                    </div>
                </div>
            </div>
             <div class="col-3 vision_child">
                <div class="row p-3">
                    <div class="col-3">
                        <img src="images/icon3.png" alt="Free Deleviry">
                    </div>
                    <div class="col-9">
                        <h6>Secure Payment</h6>
                        <p>100% Secure Payment</p>
                    </div>
                </div>
            </div>
             <div class="col-3 vision_child">
                <div class="row p-3">
                    <div class="col-3">
                        <img src="images/icon4.png" alt="Free Deleviry">
                    </div>
                    <div class="col-9">
                        <h6>24/7 Support</h6>
                        <p>Delicated Support</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
