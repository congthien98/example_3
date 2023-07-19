@extends('layouts.main')

@section('main-container')

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative banner">
                <img class="img-fluid banner" src="frontend/img/caurosel-3.png" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// The Best Bakery</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Where smiles are served
                                    daily.</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor sed stet
                                    sit diam rebum ipsum.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative banner">
                <img class="img-fluid" src="frontend/img/carousel-2.jpg
                " alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// The Best Bakery</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">We Bake With Passion</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor sed stet
                                    sit diam rebum ipsum.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    
    <!--Product -->
    <div class="container-xxl bg-light p-4 border border-5">
        <div ng-controller="MyController" class="container">
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Search</label>
                </div>
                <div class="col-md-4 col-10 mb-2">
                    <input type="text" class="form-control" ng-model="search">
                </div>
                <div class="col-2">
                    <label class="form-label">Sort</label>
                </div>
                <div class="col-md-4 col-10 mb-2">
                    <select class="form-select" ng-model="sort">
                        <option value="name">Name (A-Z)</option>
                        <option value="-name">Name (Z-A)</option>
                        <option value="price">Price Up </option>
                        <option value="-price">Price Down</option>
                        <option value="id">ID Up </option>
                        <option value="-id">ID Down</option>
                        <option value="rating">Rating (Low to High)</option>
                        <option value="-rating">Rating (High to Low)</option>
                    </select>
                </div>
            </div>
            <div class="row">


                <div class="col-lg-4 col-md-6 py-4 wow fadeInUp" data-wow-delay="0.1s"
                    ng-repeat="bike in data | filter: search | orderBy: sort">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">{{ $price |
                               $currency}}</div>
                            <h3 class="mb-3"><a href="details.html?id={{$id}}">{{$name}}</a></h3>

                            <div class="container-xxl ">
                                <div class="container ">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star "></i>
                                </div>
                                <p>{{$rating}} rating</p>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <a href="details.html?id={{$id}}">
                                <img class="img-fluid" src="frontend/img/items/{{$image_1}}" alt="">
                            </a>
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle"
                                    href="details.html?id={{$id}}">
                                    <i class="fa fa-eye text-primary"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row END-->
        </div>
        <!--ng END-->
    </div>
    <!--Product End-->
    <div id="white"class="container mt-4" >
        <div class="bake-header mb-4 pt-4 ps-4">
            <h3>Danh Mục</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="owl-carousel" id="product_slider" style="transform: translate(0px, 0px);">
           <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/cakes_1_1.png" style="background:white">
                    <p>Butter cakes</p>
                </div>
                
                <div class="bk2">
                    <img class="img" src="frontend/img/items/cakes_2_1.png" style="background:white">
                    <p>Sponge cakes</p>
                </div>
           </div>

            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/cakes_3_1.png"  style="background:white">
                    <p>Chocolate cakes</p>
                </div>
            
                <div class="bk2">
                    <img class="img" src="frontend/img/items/cakes_4_1.png"  style="background:white">
                    <p>Layer cakes</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/cakes_5_1.png"  style="background:white">
                    <p>coffee cakes</p>
                </div>
            
                <div class="bk2">
                    <img class="img" src="frontend/img/items/pastry_6_1.png"  style="background:white">
                    <p>Shortcrust pastry</p>
                </div>
            </div>
    
            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/pastry_7_1.png" style="background:white">
                    <p>Flaky pastry</p>
                </div>
                
                <div class="bk2">
                    <img class="img" src="frontend/img/items/pastry_8_1.png"  style="background:white">
                    <p>Choux pastry</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/pastry_9_1.png"  style="background:white">
                    <p>crust pastry</p>
                </div>
                
                <div class="bk2">
                    <img class="img" src="frontend/img/items/pastry_10_1.png"  style="background:white">
                    <p>Strawberry puff pastry</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/cookies_11_1.png">
                    <p>Canestrelli</p>
                </div>
                
                <div class="bk2">
                    <img class="img" src="frontend/img/items/cookies_12_1.png">
                    <p>Chocochip cookies</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/cookies_13_1.png" >
                    <p>Biscotti</p>
                </div>
                
                <div class="bk2">
                    <img class="img" src="frontend/img/items/cookies_14_1.png" >
                    <p>Anzac</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/cookies_15_1.png">
                    <p>Brownie</p>
                </div>
            
                <div class="bk2">
                    <img class="img" src="frontend/img/items/pies_16_1.png">
                <p>Pumpking pie</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/pies_17_1.png">
                    <p>Chocolate pie</p>
                </div>
                
                <div class="bk2">
                    <img class="img" src="frontend/img/items/pies_18_1.png">
                    <p>Apple pie</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bk">
                    <img class="img" src="frontend/img/items/pies_19_1.png">
                    <p>Lemon pie</p>
                </div>
                
                <div class="bk2">
                    <img class="img" src="frontend/img/items/pies_20_1.png">
                    <p>Satagazy pie</p>
                </div>
            </div>
        </div>
              <div class="box-btn">                  
            <div class="btn">
                <div role="button" onclick="btn_next()">prev</div>
            </div>
            <div class="btn">
                <div role="button" onclick="btn_prev()">next</div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
    var owl_slider
    $(document).ready(function(){
        owl_slider=$("#product_slider").owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:7,
                    nav:true,
                    loop:false
                }
            }
        });

    });

    function btn_next(){
        owl_slider.trigger('next.owl.carousel');
    }

    function btn_prev(){
        owl_slider.trigger('prev.owl.carousel');
    }
    </script>

    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">
            <div class="text-center mx-auto mb-5  wow fadeInUp " data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Explore The Categories Of Our Bakery Products</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">$11 - $99</div>
                            <h3 class="mb-3">Cake</h3>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="frontend/img/product-1.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99
                            </div>
                            <h3 class="mb-3">Bread</h3>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="frontend/img/product-2.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99
                            </div>
                            <h4 class="mb-3">Cookies</h4>
                            <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="frontend/img/product-3.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection