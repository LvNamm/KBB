@extends('layout')
@section('title-page','Mây che đan mỹ nghệ | Kingbamnboo')
@section('main-content')

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
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/carosel/bia3.png" alt="Third slide">
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

        <div class="col-md-4 ps-1 row p-0">
            <div class="col-md-12 ">
                <img class="boder-green w-100 p-0 pb-2" src="/images/carosel/biabe1.png" alt="">
            </div>

            {{-- <div class="col-md-12">
                <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/biabe1.png" alt="">
            </div> --}}
        </div>
    </div>
</div>


<div class="container">
    <div class="row"> 
    <div class="col-md-6 ps-0">
        <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/biangang2.png" alt="">
    </div>
    <div class="col-md-6 pe-0">
        <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/biangang1.jpg" alt="">
    </div>
</div>
</div>

<section class="section-products">
    <!-- Trang trí nhà cửa -->
    <div class="container mb-5">
        <div class="row mb-3" style="border:1px solid green; background-color: #46b946;">
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/trang-tri-nha-cua">
                        <h2 style="color: white;">Giới thiệu công ty</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam fuga itaque, nostrum repudiandae unde illum tempora commodi. Quam deleniti repudiandae tempora exercitationem maxime excepturi, facilis deserunt hic iure dolores. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit molestias similique est impedit nulla commodi optio? Recusandae quisquam nihil voluptatem nemo magni, suscipit laborum adipisci mollitia illum, quod dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ipsam animi necessitatibus? Dignissimos hic incidunt temporibus saepe dolorem, sint at magni neque. Neque quod, eos veritatis exercitationem est iste eligendi!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur nam accusantium maxime repudiandae minima? Dolores quo labore error alias maiores, vitae sequi officia? Et quaerat nihil provident ea mollitia id!
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mb-3" style="border:1px solid green; background-color: #46b946;">
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/trang-tri-nha-cua">
                        <h2 style="color: white;">Chính sách thanh toán</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam fuga itaque, nostrum repudiandae unde illum tempora commodi. Quam deleniti repudiandae tempora exercitationem maxime excepturi, facilis deserunt hic iure dolores. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit molestias similique est impedit nulla commodi optio? Recusandae quisquam nihil voluptatem nemo magni, suscipit laborum adipisci mollitia illum, quod dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ipsam animi necessitatibus? Dignissimos hic incidunt temporibus saepe dolorem, sint at magni neque. Neque quod, eos veritatis exercitationem est iste eligendi!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur nam accusantium maxime repudiandae minima? Dolores quo labore error alias maiores, vitae sequi officia? Et quaerat nihil provident ea mollitia id!
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mb-3" style="border:1px solid green; background-color: #46b946;">
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/trang-tri-nha-cua">
                        <h2 style="color: white;">Chính sách vận chuyển</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam fuga itaque, nostrum repudiandae unde illum tempora commodi. Quam deleniti repudiandae tempora exercitationem maxime excepturi, facilis deserunt hic iure dolores. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit molestias similique est impedit nulla commodi optio? Recusandae quisquam nihil voluptatem nemo magni, suscipit laborum adipisci mollitia illum, quod dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ipsam animi necessitatibus? Dignissimos hic incidunt temporibus saepe dolorem, sint at magni neque. Neque quod, eos veritatis exercitationem est iste eligendi!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur nam accusantium maxime repudiandae minima? Dolores quo labore error alias maiores, vitae sequi officia? Et quaerat nihil provident ea mollitia id!
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mb-3" style="border:1px solid green; background-color: #46b946;">
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/trang-tri-nha-cua">
                        <h2 style="color: white;">Chính sách đổi trả và hoàn tiền</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam fuga itaque, nostrum repudiandae unde illum tempora commodi. Quam deleniti repudiandae tempora exercitationem maxime excepturi, facilis deserunt hic iure dolores. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit molestias similique est impedit nulla commodi optio? Recusandae quisquam nihil voluptatem nemo magni, suscipit laborum adipisci mollitia illum, quod dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ipsam animi necessitatibus? Dignissimos hic incidunt temporibus saepe dolorem, sint at magni neque. Neque quod, eos veritatis exercitationem est iste eligendi!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur nam accusantium maxime repudiandae minima? Dolores quo labore error alias maiores, vitae sequi officia? Et quaerat nihil provident ea mollitia id!
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mb-3" style="border:1px solid green; background-color: #46b946;">
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/trang-tri-nha-cua">
                        <h2 style="color: white;">Hướng dẫn bảo quản</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quisquam fuga itaque, nostrum repudiandae unde illum tempora commodi. Quam deleniti repudiandae tempora exercitationem maxime excepturi, facilis deserunt hic iure dolores. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit molestias similique est impedit nulla commodi optio? Recusandae quisquam nihil voluptatem nemo magni, suscipit laborum adipisci mollitia illum, quod dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ipsam animi necessitatibus? Dignissimos hic incidunt temporibus saepe dolorem, sint at magni neque. Neque quod, eos veritatis exercitationem est iste eligendi!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur nam accusantium maxime repudiandae minima? Dolores quo labore error alias maiores, vitae sequi officia? Et quaerat nihil provident ea mollitia id!
        </div>
    </div>
</section>
@endsection