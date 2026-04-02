<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Davy Computer @yield('title')</title>
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body>
    <div class="header" >
        <div class="container p-2">
            <div class="row">
                <div class="col-12 col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-flex justify-content-center align-items-center">
                    <div>
                        <img src="{{asset('assets/images/logo.png')}}" style="height: 50px" alt="Logo">
                    </div>
                    <div style="margin-left: 10px" style="line-height: 0;">
                        <div class="text-primary h4"><b>Davy</b></div>
                        <div class="text-light h6">Comuter</div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-md-0 mb-2 search d-flex align-items-center justify-content-center">
                    <input type="text" class="form-control" placeholder="Search products....">
                    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
                <div class="col-12 col-md-5 menu d-flex align-items-center justify-content-between">
                    <div><a href="/about">About</a></div>
                    <div><a href="/contact">Contact</a></div>
                    <div><a href="#"><i class="bi bi-cart3"></i></a></div>
                    <div><a href="#"><i class="bi bi-heart"></i></a></div>
                    <div><a href="/login" class="btn btn-outline-primary">Login</a></div>
                    <div class="dropdown">
                        <a type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('assets/images/us.png')}}" alt="Flag"></a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-light language" style="a:hover: background-color: black;" href="#"><img src="{{asset('assets/images/kh.png')}}" alt="Khmer"> ភាសាខ្មែរ</a></li>
                            <li><a class="dropdown-item text-light language" style="a:hover: background-color: black;" href="#"><img src="{{asset('assets/images/us.png')}}" alt="English"> English</a></li>
                            <li><a class="dropdown-item text-light language" style="a:hover: background-color: black;" href="#"><img src="{{asset('assets/images/cn.png')}}" alt="Chinese"> 中文</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid text-light">
                        <button class="d-block btn " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <b><i class="bi bi-list h3 text-light"></i></b>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto w-100 mb-2 mb-lg-0 d-flex justify-content-around">
                                <li class="nav-item text-center">
                                    <a class="nav-link text-light" href="#"><b><i class="bi bi-laptop"></i> LAPTOPS</b></a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link text-light" href="#"><b><i class="bi bi-pc-display"></i> DESKTOPS</b></a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link text-light" href="#"><b><i class="bi bi-box-seam"></i> CLEARANCE</b></a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link text-light" href="#"><b><i class="bi bi-stars"></i> NEW ARRIVALS</b></a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link text-light" href="#"><b><i class="bi bi-tags-fill"></i> PROMOTIONS</b></a>
                                </li>
                                <li class="nav-item text-center">
                                    <a class="nav-link text-light" href="#"><b><i class="bi bi-recycle"></i> SECONDHAND</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')


    <div class="bg-primary d-flex justify-content-center align-items-center position-fixed" style="bottom: 20px;right:20px;border-radius:50%;width:70px;height:70px">
        <a href="https://t.me/sreansophea"><i class="bi bi-messenger text-light h2"></i></a>
    </div>

    <div class="footer bg-dark p-3 text-light text-center">
        <div class="row">
            <div class="col-12 mb-md-0 mb-3 col-md-4">
                <div class="h4">Davy Computer</div>
                <div class="">Selling computers with customer trust, high quality, and proper warranty.</div>
            </div>
            <div class="col-12 mb-md-0 mb-3 col-md-4">
                <div class="h4">Contact</div>
                <div class="h6"><i class="bi bi-telephone text-light"></i> 012 85 19 02 / 069 85 19 02</div>
                <div class="h6"><i class="bi bi-geo-alt text-light"></i> #432-433, St. 271, Teuk Thla, Sen Sok, Phnom Penh</div>
            </div>
            <div class="col-12 mb-md-0 mb-3 col-md-4">
                <div class="h4">Follow Us</div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="text-light h4 m-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light h4 m-2"><i class="bi bi-telegram"></i></a>
                    <a href="#" class="text-light h4 m-2"><i class="bi bi-messenger"></i></a>
                </div>
            </div>
        </div>
        <hr style="margin:0 auto;margin-top:50px;" width="95%">
        <div class="h6 mt-3 mb-4">© 2026 Davy Computer</div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @yield('script')
</body>
</html>