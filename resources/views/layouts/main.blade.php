<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Retail-I X - Machine Learning & AI Startups">
      <meta name="keyword" content="robotics, AI, IOT, machine learning, Big Data, Startups">
      <meta name="author" content="Ekpoto Liberty">
      <!-- Title -->
      <title>Retail-I @yield('title')</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <!-- Flaticon CSS -->
      <link rel="stylesheet" href="{{asset('flaticon/flaticon.css')}}">
      <!--Magnific css-->
      <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
      <!--Animate css-->
      <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
      <!-- slicknav cdd -->
      <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!--Responsive css-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   </head>
   <body>
       
       
      <!-- Start Preloader -->
      <div id="preloader">
         <div class="preload-content">
            <div id="dream-load"></div>
         </div>
      </div>
      <!-- End Preloader -->
       
       
      <!--Header Section Start-->
      <header class="header-area animated">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 d-flex align-items-center justify-content-between">
                  <div class="logo-area">
                     <a href="{{url('/')}}">
                        {{-- <i class="flaticon-chip"></i> --}}
                        <img src="{{asset('img/logo.png')}}" alt="logo">
                     </a>
                  </div>
                  <div class="menu-area d-flex justify-content-end align-items-center">
                     <div class="mobile-menu"></div>
                     <div class="main-menu">
                        <nav class="menu-box">
                           <ul class="nav-menu"  id="mobile-menu">
                              @guest
                                 <li><a href="{{url('login')}}">Log in</a></li>
                                 <li><a href="{{url('register')}}">Register</a></li>
                              @else
                                 <li><a href="{{url('home')}}">Dashboard</a></li>
                                 <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                 </li>
                              @endguest
                           </ul>
                        </nav>
                     </div>
                     <div class="right-bar-icon ml-4">
                        <ul>
                           <li class="search-option">
                              <a class="search-toggle" href="javascript:;"><i class="fa fa-search"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--Header Section End-->
       
       
      @yield('contents')
       
      <!-- Footer Start -->
      <footer class="footer-section">
         <!-- Footer Top Start -->
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="footer-logo">
                           <a href=""><img src="{{asset('img/logo.png')}}" alt="logo" /></a>
                        </div>
                        <p>Retail-I is a retail analytics solution built for the African market that brings 
                        e-commerce style analytics to Brick and Mortar stores, through the analysis of shopper behaviour and sentiment. </p>
                        <ul class="footer-social">
                           <li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#" class="gp"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#" class="pin"><i class="fa fa-pinterest"></i></a></li>
                           <li><a href="#" class="ln"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-6">
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                              <h3>Services</h3>
                              <ul>
                                 <li><a href="#">Mall Analytics </a></li>
                                 <li><a href="#">Shelf Analysis </a></li>
                                 <li><a href="#">Loyalty Optimization </a></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                              <h3>Community</h3>
                              <ul>
                                 <li><a href="#">Our Product</a></li>
                                 <li><a href="#">Documentation</a></li>
                                 <li><a href="#">Company</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="single-footer wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                        <h3>Contact Us</h3>
                        <ul class="footer-contact-info">
                           <li>15 Sobo Arobiodu, Ikeja GRA, Lagos Nigeria</li>
                           <li><span>Email:</span> <a href="mailto:hello@example.com">info@x-ordium.com</a></li>
                           <li><span>Phone:</span> <a href="tel:+44587154756">+234 814 224 1988</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Footer Top End -->
          
         <!-- Footer Bottom Start -->
         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="copyright wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <p>&copy; {{ date('Y') }} Zues </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Footer Bottom End -->
      </footer>
      <!-- Footer End -->
       
       
      <!-- Search Overlay -->
      <div class="search-overlay">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-close">
                  <span class="search-overlay-close-line"></span>
                  <span class="search-overlay-close-line"></span>
               </div>
               <div class="search-overlay-form">
                  <form>
                     <input type="text" class="input-search" placeholder="Search here...">
                     <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- End Search Overlay -->
       
       
      <!--Jquery js-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <!-- Popper JS -->
      <script src="{{asset('js/popper.min.js')}}"></script>
      <!--Bootstrap js-->
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!--Owl-Carousel js-->
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <!-- Slicknav Js -->
      <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
      <!--Magnific js-->
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Counter JS -->
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
      <!-- Way Points JS -->
      <script src="{{asset('js/waypoints-min.js')}}"></script>
      <!--Wow js-->
      <script src="{{asset('js/wow.min.js')}}"></script>
      <!--Main js-->
      <script src="{{asset('js/main.js')}}"></script>

      @yield('scripts')
   </body>
</html>

