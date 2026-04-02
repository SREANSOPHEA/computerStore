@extends('frontend.masterPage')

@section('title',' - Home')


@section('content')

    <div class="container p-4">
        <div class="row bg-danger p-3">
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="text-light h3"><i class="bi bi-lightning-charge-fill text-warning"></i>FLASH SALE</div>
                <div class="bg-warning text-light rounded" style="width: max-content;padding:0 8px;height:max-content;margin-left:15px">Chance to get many free gifts</div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-between">
                <div class="d-flex text-light align-items-center">
                    <div class="h5" style="padding: 0 10px">End in:</div>
                    <div class="bg-dark rounded h5" style="padding: 5px 10px;">00</div>
                    <div class="h5" style="padding: 0 10px"><b>:</b></div>
                    <div class="bg-dark rounded h5" style="padding: 5px 10px;">00</div>
                    <div class="h5" style="padding: 0 10px"><b>:</b></div>
                    <div class="bg-dark rounded h5" style="padding: 5px 10px;">00</div>
                </div>
                <div class="bg-warning text-dark" style="width: max-content;padding:3px 10px;height:max-content;margin-left:15px;border-radius:20px"><b>Shop Now <i class="bi bi-arrow-right"></i></b></div>
            </div>
        </div>
    </div>

    <div class="container slideShow ">
        <div id="carouselExampleDark" data-bs-ride="carousel" class="carousel carousel-light slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{asset('assets/images/slide1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('assets/images/slide2.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('assets/images/slide3.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('assets/images/slide4.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container animatedCard mt-3">
        <div class="row" style="color: rgb(141, 141, 141);">
            <div class="col-12 col-md-3 p-3" >
                <div class=" text-center bg-dark p-3 rounded" style="border: 1px solid rgb(141, 141, 141);">
                    <i class="mb-3 h1 bi bi-truck text-primary"></i>
                    <div class="h4 ">Fast Delivery</div>
                    <div class="h6">Delivery Service</div>
                </div>
            </div>
            <div class="col-12 col-md-3 p-3">
                <div class="text-center bg-dark p-3 rounded" style="border: 1px solid rgb(141, 141, 141);">
                    <i class="mb-3 h1 bi bi-shield-check text-success"></i>
                    <div class="h4 ">Quality Guarantee</div>
                     <div class="h6">100% Genuine Products</div>
                </div>
            </div>
            <div class="col-12 col-md-3 p-3">
                <div class="text-center bg-dark p-3 rounded" style="border: 1px solid rgb(141, 141, 141);">
                    <i class="mb-3 h1 bi bi-headset text-info"></i>
                    <div class="h4 ">Customer Support</div>
                    <div class="h6">Consultation Available Anytime</div>
                </div>
            </div>
            <div class="col-12 col-md-3 p-3">
                <div class="text-center bg-dark p-3 rounded" style="border: 1px solid rgb(141, 141, 141);">
                    <i class="mb-3 h1 bi bi-credit-card text-warning"></i>
                    <div class="h4 ">Easy Payment</div>
                      <div class="h6">Accepts Cards & QR Code</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container animatedCard">
        <div class="row text-center gadgetModel d-flex justify-content-center flex-wrap">
            <a href="#" class="btn-all" style="background-color: #212529;"><div>All</div></a>
            <a href="#" style="background-color: #DC3545;"><div>MSI</div></a>
            <a href="#" style="background-color: #198754;"><div>ASUS</div></a>
            <a href="#" style="background-color: #0D62FE;"><div>LENOVO</div></a>
            <a href="#" style="background-color: #FD7E14;"><div>DELL</div></a>
            <a href="#" style="background-color: #6F42C1;"><div>ACER</div></a>
            <a href="#" style="background-color: #0DCAF0;"><div>APPLE</div></a>
            <a href="#" style="background-color: #212529;"><div>Microsoft Surface</div></a>
            <a href="#" style="background-color: #DC3545;"><div>Other</div></a>
        </div>
    </div>

    <div class="container animatedCard laptop mt-4">
        <div class="row product-header">
            <div class="col-6">
                <div class="h3" style="border-left: 7px solid #0D62FE;color: rgb(141, 141, 141);padding-left:20px">
                    <b>LAPTOPS</b>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-outline-primary" style="border-radius: 20px !important;">Show All  <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-6 col-md-4 col-lg-3 p-3">
                <div class="card-product bg-dark position-relativ p-3">
                    <div class="product-image position-relative">
                        <center>
                            <img src="{{asset('assets/images/laptop.jpg')}}" style="width:85%" alt="Product Image">
                        </center>
                        <div class="position-absolute bg-light d-flex justify-content-center align-items-center" style="width: 40px;height:40px;border-radius:50%;top:0;right:0;"><i class="bi bi-heart text-danger"></i></div>
                        <div class="product-des position-absolute d-flex justify-content-between align-items-end w-100" style="bottom:0;">
                            <div class="bg-info"><i class="bi bi-shield-check"></i> Warranty 1 Year</div>
                            <div class="bg-success"><i class="bi bi-stars"></i> New</div>
                        </div>
                    </div>
                    <div class="product-detail text-center p-3" style="color: #ADB5BD;">
                        <div class="h6">DELL</div>
                        <div class="h5"><b>Laptop DELL Latitude 5300</b></div>
                        <div class="h4 text-primary">$299.00</div>
                        <div class="d-flex justify-content-center h5" style="letter-spacing: 3px">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            (0)
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100" style="border-radius: 20px !important;"><i class="bi bi-eye"></i> View Detail</a>
                    </div>

                </div>
            </div>
            @endfor
        </div>
    </div>

    <div class="container animatedCard desktop mt-4">
        <div class="row product-header">
            <div class="col-6">
                <div class="h3" style="border-left: 7px solid #0D62FE;color: rgb(141, 141, 141);padding-left:20px">
                    <b>DESKTOPS</b>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-outline-primary" style="border-radius: 20px !important;">Show All  <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-6 col-md-4 col-lg-3 p-3">
                <div class="card-product bg-dark position-relativ p-3">
                    <div class="product-image position-relative">
                        <center>
                            <img src="{{asset('assets/images/laptop.jpg')}}" style="width:85%" alt="Product Image">
                        </center>
                        <div class="position-absolute bg-light d-flex justify-content-center align-items-center" style="width: 40px;height:40px;border-radius:50%;top:0;right:0;"><i class="bi bi-heart text-danger"></i></div>
                        <div class="product-des position-absolute d-flex justify-content-between align-items-end w-100" style="bottom:0;">
                            <div class="bg-info"><i class="bi bi-shield-check"></i> Warranty 1 Year</div>
                            <div class="bg-success"><i class="bi bi-stars"></i> New</div>
                        </div>
                    </div>
                    <div class="product-detail text-center p-3" style="color: #ADB5BD;">
                        <div class="h6">DELL</div>
                        <div class="h5"><b>Laptop DELL Latitude 5300</b></div>
                        <div class="h4 text-primary">$299.00</div>
                        <div class="d-flex justify-content-center h5" style="letter-spacing: 3px">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            (0)
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100" style="border-radius: 20px !important;"><i class="bi bi-eye"></i> View Detail</a>
                    </div>

                </div>
            </div>
            @endfor
        </div>
    </div>

    <div class="container animatedCard promotion mt-4">
        <div class="row product-header">
            <div class="col-6">
                <div class="h3" style="border-left: 7px solid #0D62FE;color: rgb(141, 141, 141);padding-left:20px">
                    <b>PROMOTIONS</b>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-outline-primary" style="border-radius: 20px !important;">Show All  <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
            <div class="col-6 col-md-4 col-lg-3 p-3">
                <div class="card-product bg-dark position-relativ p-3">
                    <div class="product-image position-relative">
                        <center>
                            <img src="{{asset('assets/images/laptop.jpg')}}" style="width:85%" alt="Product Image">
                        </center>
                        <div class="position-absolute bg-light d-flex justify-content-center align-items-center" style="width: 40px;height:40px;border-radius:50%;top:0;right:0;"><i class="bi bi-heart text-danger"></i></div>
                        <div class="product-des position-absolute d-flex justify-content-between align-items-end w-100" style="bottom:0;">
                            <div class="bg-info"><i class="bi bi-shield-check"></i> Warranty 1 Year</div>
                            <div class="bg-success"><i class="bi bi-stars"></i> New</div>
                        </div>
                    </div>
                    <div class="product-detail text-center p-3" style="color: #ADB5BD;">
                        <div class="h6">DELL</div>
                        <div class="h5"><b>Laptop DELL Latitude 5300</b></div>
                        <div class="h4 text-primary">$299.00</div>
                        <div class="d-flex justify-content-center h5" style="letter-spacing: 3px">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            (0)
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100" style="border-radius: 20px !important;"><i class="bi bi-eye"></i> View Detail</a>
                    </div>

                </div>
            </div>
            @endfor
        </div>
    </div>

    <div class="container animatedCard cup mt-4">
        <div class="row product-header">
            <div class="col-6">
                <div class="h3" style="border-left: 7px solid #0D62FE;color: rgb(141, 141, 141);padding-left:20px">
                    <b>CPU</b>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-outline-primary" style="border-radius: 20px !important;">Show All  <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 2; $i++)
            <div class="col-6 col-md-4 col-lg-3 p-3">
                <div class="card-product bg-dark position-relativ p-3">
                    <div class="product-image position-relative">
                        <center>
                            <img src="{{asset('assets/images/laptop.jpg')}}" style="width:85%" alt="Product Image">
                        </center>
                        <div class="position-absolute bg-light d-flex justify-content-center align-items-center" style="width: 40px;height:40px;border-radius:50%;top:0;right:0;"><i class="bi bi-heart text-danger"></i></div>
                        <div class="product-des position-absolute d-flex justify-content-between align-items-end w-100" style="bottom:0;">
                            <div class="bg-info"><i class="bi bi-shield-check"></i> Warranty 1 Year</div>
                            <div class="bg-success"><i class="bi bi-stars"></i> New</div>
                        </div>
                    </div>
                    <div class="product-detail text-center p-3" style="color: #ADB5BD;">
                        <div class="h6">DELL</div>
                        <div class="h5"><b>Laptop DELL Latitude 5300</b></div>
                        <div class="h4 text-primary">$299.00</div>
                        <div class="d-flex justify-content-center h5" style="letter-spacing: 3px">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            (0)
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100" style="border-radius: 20px !important;"><i class="bi bi-eye"></i> View Detail</a>
                    </div>

                </div>
            </div>
            @endfor
        </div>
    </div>

    <div class="container animatedCard gaming mt-4">
        <div class="row product-header">
            <div class="col-6">
                <div class="h3" style="border-left: 7px solid #0D62FE;color: rgb(141, 141, 141);padding-left:20px">
                    <b>GAMINGS</b>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-outline-primary" style="border-radius: 20px !important;">Show All  <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-6 col-md-4 col-lg-3 p-3">
                <div class="card-product bg-dark position-relativ p-3">
                    <div class="product-image position-relative">
                        <center>
                            <img src="{{asset('assets/images/laptop.jpg')}}" style="width:85%" alt="Product Image">
                        </center>
                        <div class="position-absolute bg-light d-flex justify-content-center align-items-center" style="width: 40px;height:40px;border-radius:50%;top:0;right:0;"><i class="bi bi-heart text-danger"></i></div>
                        <div class="product-des position-absolute d-flex justify-content-between align-items-end w-100" style="bottom:0;">
                            <div class="bg-info"><i class="bi bi-shield-check"></i> Warranty 1 Year</div>
                            <div class="bg-success"><i class="bi bi-stars"></i> New</div>
                        </div>
                    </div>
                    <div class="product-detail text-center p-3" style="color: #ADB5BD;">
                        <div class="h6">DELL</div>
                        <div class="h5"><b>Laptop DELL Latitude 5300</b></div>
                        <div class="h4 text-primary">$299.00</div>
                        <div class="d-flex justify-content-center h5" style="letter-spacing: 3px">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            (0)
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100" style="border-radius: 20px !important;"><i class="bi bi-eye"></i> View Detail</a>
                    </div>

                </div>
            </div>
            @endfor
        </div>
    </div>

@endsection



@section('script')
    <script src="{{asset('assets/js/scrollAnimation.js')}}"></script>
@endsection