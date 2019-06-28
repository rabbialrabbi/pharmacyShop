@extends('layouts.layout')

@section('title','Product List')

@section('body')
    <div class="ht-heading container">
        <div class="ht-heading_text p-0"><h3>PRODUCT GELLARY</h3></div>
        <hr>
    </div>

    <div class="ht-gallery container">

        <div class="row">

            <div class="col-3 pl-2 ht-gallery_shadow">
                <a href="/productdetails">
                    <div class="ht-gallery_style">
                        <img src="images/gallery/rooh-afza.jpg" alt="Rooh-afza">
                        <h6>Rooh Afza</h6>
                        <p>$20</p>
                    </div>
                </a>
            </div>

            <div class="col-3 pl-2 ">
                <a href="/productdetails">
                    <div class="ht-gallery_style">
                        <img src="images/gallery/hermin.jpg" alt="Hermin">
                        <h6>Hermina</h6>
                        <p>$20</p>
                    </div>
                </a>
            </div>

            <div class="col-3  pl-2">
                <a href="/productdetails">
                    <div class="ht-gallery_style">
                        <img src="images/gallery/safi.jpg" alt="Safi">
                        <h6>Safi</h6>
                        <p>$20</p>
                    </div>
                </a>
            </div>

            <div class="col-3  pl-2">
                <a href="/productdetails">
                    <div class="ht-gallery_style">
                        <img src="images/gallery/suline.jpg" alt="Suline">
                        <h6>Suline</h6>
                        <p>$20</p>
                    </div>
                </a>
            </div>

            <div class="col-3  pl-2 pt-4">
                <a href="/productdetails">
                    <div class="ht-gallery_style">
                        <img src="images/gallery/suline.jpg" alt="Suline">
                        <h6>Suline</h6>
                        <p>$20</p>
                    </div>
                </a>
            </div>

            <div class="col-3  pl-2 pt-4">
                <a href="/productdetails">
                    <div class="ht-gallery_style">
                        <img src="images/gallery/suline.jpg" alt="Suline">
                        <h6>Suline</h6>
                        <p>$20</p>
                    </div>
                </a>
            </div>

            <div class="col-3  pl-2 pt-4">
                <a href="/productdetails">
                    <div class="ht-gallery_style">
                        <img src="images/gallery/rooh-afza.jpg" alt="Rooh-afza">
                        <h6>Rooh Afza</h6>
                        <p>$20</p>
                    </div>
                </a>
            </div>

        </div>

    </div>

    <div class="pl-pagination-header container">
        <a href="">
            <div class="pl-paginagion"><</div>
        </a>
        <a href="">
            <div class="pl-paginagion">1</div>
        </a>
        <a href="">
            <div class="pl-paginagion">2</div>
        </a>
        <a href="">
            <div class="pl-paginagion">3</div>
        </a>
        <a href="">
            <div class="pl-paginagion">></div>
        </a>

    </div>


    <div class="bottom_margin"></div>
@endsection