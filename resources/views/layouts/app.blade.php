<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasmeem</title>

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="{{asset('assets/images/image.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
  />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="{{asset('assets/js/script.js')}}"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo tasmm final FONT-05-05.png')}}">
    @livewireStyles
</head>
<body>
    <header class="header">
            <a href="/" class="logo"><img src="{{asset('assets/images/TASMEEM-03.png')}}" alt=""></a>
            <div class="fas fa-bars"></div>
            <nav class="navbar">
                <ul>
                    <li><a href="/">{{__('mycustom.home')}}</a></li>
                    <li><a href="{{route('store')}}">{{__('mycustom.shop')}}</a></li>
                    {{-- <li><a href="{{route('gallery')}}">{{__('mycustom.Gallery')}}</a></li> --}}
                    <li><a href="{{route('blog')}}">{{__('mycustom.blogs')}}</a></li>
                    <li><a href="{{route('cources')}}">{{__('mycustom.cources')}}</a></li>
                    @auth
                        @if(Auth::user()->utype == 'ADM')
                            <li class="dropdown">
                                <a href="#" class="dropbtn">{{__('mycustom.Admin')}}</a>
                                <div class="dropdown-content">
                                    <a href="{{route('admin.categories')}}"> {{__('mycustom.categories')}} </a>
                                    <a href="{{route('admin.products')}}"> {{__('mycustom.products')}} </a>
                                    <a href="{{route('admin.blogs')}}"> {{__('mycustom.blogs')}} </a>
                                    <a href="{{route('admin.courses')}}"> {{__('mycustom.cources')}} </a>
                                </div>
                            </li>
                        @endif
                        <li class="fs-3 text-light"> {{Auth::user()->name}} </li>
                        <li>
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"> {{__('mycustom.logout')}} </a>
                            </form>
                        </li>

                    @else
                        <li>
                            <a href="{{route('login')}}"> {{__('mycustom.login')}} </a>
                        </li>
                    @endif
                    @if(session()->has('locale') && session()->get('locale') === 'ar')
                        <li><a href="{{ route('languageConverter', 'en') }}">English</a></li>
                    @else
                        <li><a href="{{ route('languageConverter', 'ar') }}">عربي</a></li>
                    @endif
                </ul>
            </nav>
    </header>




    {{$slot}};



    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>{{__('mycustom.Aboutus')}}</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#portfolio">{{__('mycustom.Portfolio')}}</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#team">{{__('mycustom.Aboutus')}}</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#contact">{{__('mycustom.ContactUs')}}</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="#faq">{{__('mycustom.FAQ')}}</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                      <h4>{{__('mycustom.UsefulLinks')}}</h4>
                      <ul>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="#">{{__('mycustom.home')}}</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="#about">{{__('mycustom.Aboutus')}}</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="#service">{{__('mycustom.Ourservices')}}</a></li>
                      </ul>
                  </div>

                    <div class="col-lg-3 col-md-6 footer-contact" style="font-size: 1.5rem;">
                        <h4>{{__('mycustom.ContactUs')}}</h4>
                        <p>
                            HELWAN,<br>
                            Cairo,<br>
                            Egypt <br>
                            <strong>Phone:</strong> +201110487092<br>
                            <strong>Email:</strong> info@eltasmem.com<br>
                        </p>

                        <div class="social-links">
                          <a href="https://www.facebook.com/profile.php?id=61550279819181"><i class="ion-logo-facebook"></i></a>
                            <a href="https://www.instagram.com/tasmim_software/"><i class="ion-logo-instagram"></i></a>
                            <a href="https://wa.link/sa19fv"><i class="ion-logo-whatsapp"></i></a>
                            <a href="info@eltasmem.com"><i class="ion-logo-googleplus"></i></a>
                        </div>

                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-contact">
                      <div class="footer-logo">
                          <img src="{{asset('assets/images/logo tasmm final FONT-05-05.png')}}">
                      </div>
                    </div> -->


                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 copyright" style="color: #fff; font-size: 1.3rem;">
                    Copyright &copy; 2023 TASMEEM Company Website. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>

    @livewireScripts
    @stack('scripts')
</body>
</html>
