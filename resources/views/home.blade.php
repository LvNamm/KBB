@extends('layout')
@section('title-page', 'Mây tre đan mỹ nghệ | Kingbamnboo')
@section('main-content')
    <style>
        .div-show-product {
            flex-direction: row;
            flex-wrap: nowrap;
            overflow-y: hidden;
            overflow-x: scroll;
        }

        .div-show-product::-webkit-scrollbar {
            height: 0px;
        }

        .div-show-product::-webkit-scrollbar-track {
            background-color: black;
        }


        .product-next:hover {
            cursor: pointer;
        }

        .product-next:hover>.product-action-icon-next {
            color: rgb(87, 87, 87);
        }


        .product-previous:hover>.product-action-icon-previous {
            color: rgb(87, 87, 87);
        }

        .product-previous:hover {
            cursor: pointer;
        }

        .product-action-icon {
            color: rgb(187, 170, 170);
        }

        .w-15 {
            width: 15%;
        }
        .newpaper{
            border: 1px solid rgb(35, 231, 61, 0.3);
            overflow: hidden;
        }
        .newpaper-content{
            flex-wrap: nowrap;
        }
        .container{
            padding: 0;
        }
    </style>
    <div class="container p-0">
        <div class=" ps-0 pe-0  mb-3 row w-100" style="justify-content:space-between">
            <div class="col-md-8 pe-1 boder-green">

                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/images/carosel/bia1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/carosel/bia2.png" alt="Second slide">
                        </div>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">


                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">


                    </a> -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">

                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">

                    </button>
                </div>

            </div>

            <div class="col-md-4 ps-1 row p-0" style="display: flex;
            flex-direction: column;
            justify-content: space-between;">
                <div class="col-md-12 ">
                    <img class="boder-green w-100 p-0 pb-2" src="/images/carosel/biabe1.png" alt="">
                </div>

                <div class="col-md-12">
                    <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/biabe1.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row"> 
        <div class="col-md-6 ps-0" style="padding-left: 0.7rem !important;">
            <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/biangang2.png" alt="">
        </div>
        <div class="col-md-6 pe-0" style="padding-right: 1.5rem !important;">
            <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/biangang1.jpg" alt="">
        </div>
    </div>
    </div>

    <div class="newpaper container mt-4 pt-1" style="border: 1px solid rgb(35, 231, 61, 0.3); display: none">
        <div class="newpaper-content row">
            <div class="col-md-2">
                <img  class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>
            <div class="col-md-2">
                <img class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>
            <div class="col-md-2">
                <img class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>
            <div class="col-md-2">
                <img class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>
            <div class="col-md-2">
                <img class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>
            <div class="col-md-2">
                <img class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>

            <div class="col-md-2">
                <img class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>

            <div class="col-md-2">
                <img class="w-100" src="\images\newspaper\baibao1.jpg" alt="">
                <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">Công chúa kế vị Thụy Điển thích thú khi thăm làng nghề mây tre đan Phú Vinh</p>
            </div>
        </div>

    </div>

    <div class="main-img container mt-5 mb-5" style="padding-right: 0.7rem;">

        <div class="d-flex flex-row justify-content-center mb-5 category" style="margin-right: 0rem;margin-left: 0rem;">
            <div>
                <div class="category-text center">
                        <h2 class="category-text ms-1" style="margin: 0">Giới thiệu</h2>
                </div>
            </div>
        </div>

        <img class="container" src="\images\home\Home.png" alt="">
        <img class="container mt-3" src="\images\home\Gallery.png" alt="">
        <img class="container mt-3" src="\images\home\3.png" alt="">
        <img class="container mt-3" src="\images\home\4.png" alt="">
        <img class="container mt-3" src="\images\home\6.png" alt="">
        <img class="container mt-3" src="\images\home\Contact.png" alt="">
        
    </div>
    @endsection