@extends('frontend.masterPage')

@section('title',' - About Us')


@section('content')

    <div class="container text-center mb-3" style="padding-top: 40px;">
        <div class="h1 text-primary mt-4">About Davy Computer</div>
        <div class="h5 mt-3 mb-3" style="color: rgb(141, 141, 141);">Quality • Reliability • Honest Service</div>

        <div class="row mt-3">
            <div class="col-12 col-md-6 text-start mt-3 d-flex justify-content-center" style="flex-direction: column;">
                <div class="h2 text-light">Who Are We?</div>
                <div class="h6" style="line-height: 30px;text-align: justify;color: rgb(141, 141, 141);">Davy Computer is a computer shop with years of experience and trust from customers. We focus on providing high-quality computers from famous brands like MSI, Apple, Asus, Lenovo, Dell with reasonable prices and proper warranties.</div>
                <div class="h6 mt-3" style="line-height: 30px;text-align: justify;color: rgb(141, 141, 141);">We believe that a computer is not just a general appliance, but an essential tool for work, study, and daily communication. Therefore, we always select products that are of high quality and have clear sources.</div>
            </div>
            <div class="col-12 col-md-6 rounded mt-3 d-flex align-items-center">
                <img src="{{asset('assets/images/image.jpg')}}" class="w-100 rounded" alt="image">
            </div>
        </div>
    </div>

    <div class="container mt-3 animatedCard">
        <div class="row">
            <div class="col-12 col-md-6 p-3">
                <div class="rounded bg-dark p-3">
                    <div class="h3 text-success"><i class="bi bi-bullseye"></i> Our Mission</div>
                    <div class="mt-3" style="line-height: 30px;color: rgb(141, 141, 141);">Our mission is to provide customers with good quality computers along with honest, fast, and reliable service. We want every customer to have the best experience when shopping at our store.</div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3">
                <div class="rounded bg-dark p-3">
                    <div class="h3 text-primary"><i class="bi bi-eye"></i> Our Vision</div>
                    <div class="mt-3" style="line-height: 30px;color: rgb(141, 141, 141);">We envision becoming a leading computer shop that customers can trust in terms of quality, price, and service. We continue to develop online services and new technologies so that customers can shop easily and securely.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-3 text-center text-light animatedCard">
        <div class="h2">Why Choose Davy Computer?</div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 p-1">
                <div class="text-center rounded">
                    <div class="h1"><i class="bi bi-patch-check-fill text-success"></i></div>
                    <div class="h4">Quality Guaranteed</div>
                    <div class="" style="line-height: 30px;color: rgb(141, 141, 141);">Every computer has a clear source and proper warranty.</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 p-1">
                <div class="text-center rounded">
                    <div class="h1"><i class="bi bi-tags-fill text-primary"></i></div>
                    <div class="h4">Reasonable Price</div>
                    <div style="line-height: 30px;color: rgb(141, 141, 141);">Competitive prices with frequent special offers.</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 p-1">
                <div class="text-center rounded">
                    <div class="h1"><i class="bi bi-headset text-warning"></i></div>
                    <div class="h4">Great Service</div>
                    <div style="line-height: 30px;color: rgb(141, 141, 141);">Consultation with friendliness and care.</div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 p-1">
                <div class="text-center rounded">
                    <div class="h1"><i class="bi bi-truck text-danger"></i></div>
                    <div class="h4">Free Delivery</div>
                    <div style="line-height: 30px;color: rgb(141, 141, 141);">Fast and safe delivery nationwide.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-3 text-center text-dark animatedCard">
        <div class="bg-light rounded p-3">
            <div class="h3 mt-b">Welcome to Davy Computer</div>
            <div class="h5">Thank you for choosing us. We are always happy to serve you!</div>
            <a href="#" class="h2 btn btn-primary mb-3" style="border-radius: 20px !important;"><i class="bi bi-shop"></i> Shop Now</a>
        </div>
    </div>

@endsection


@section('script')
    <script src="{{asset('assets/js/scrollAnimation.js')}}"></script>
@endsection