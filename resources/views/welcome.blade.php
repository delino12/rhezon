@extends('layouts.app')

@section('title')
   Welcome
@endsection

@section('contents')
   <!--about-us start -->
      <section id="home" class="about-us">
         <div class="container">
            <div class="about-us-content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="single-about-us">
                        <div class="about-us-txt">
                           <h2>
                              Explore the Beauty riding with <br /> Rhezon
                           </h2>
                           <div class="about-btn">
                              <button  class="about-view" onclick="window.location.href = 'search-rides';">
                                 explore now
                              </button>
                           </div><!--/.about-btn-->
                        </div><!--/.about-us-txt-->
                     </div><!--/.single-about-us-->
                  </div><!--/.col-->
                  <div class="col-sm-0">
                     <div class="single-about-us">
                        
                     </div><!--/.single-about-us-->
                  </div><!--/.col-->
               </div><!--/.row-->
            </div><!--/.about-us-content-->
         </div><!--/.container-->
      </section><!--/.about-us-->
      <!--about-us end -->

      <!--travel-box start-->
      <section  class="travel-box">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="single-travel-boxes">
                     <div id="desc-tabs" class="desc-tabs">

                        <ul class="nav nav-tabs" role="tablist">

                           <li role="presentation" class="active">
                              <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
                                 <i class="fa fa-tree"></i>
                                 tours
                              </a>
                           </li>

                           <li role="presentation">
                              <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
                                 <i class="fa fa-building"></i>
                                 hotels
                              </a>
                           </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                           <div role="tabpanel" class="tab-pane active fade in" id="tours">
                              <div class="tab-para">

                                 <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="single-tab-select-box">

                                          <h2>destination</h2>
                                          <div class="travel-select-icon">
                                             <select class="form-control" id="search_location">
                                                <option value="default">Enter your location</option>
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->

                                          <div class="travel-select-icon">
                                             <select class="form-control" id="search_destination">
                                                <option value="default">Enter your destination</option>
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->

                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>Pick-up Date</h2>
                                          <div class="travel-check-icon">
                                             <form action="#">
                                                <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2021 ">
                                             </form>
                                          </div><!-- /.travel-check-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>Drop-off Date</h2>
                                          <div class="travel-check-icon">
                                             <form action="#">
                                                <input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2021">
                                             </form>
                                          </div><!-- /.travel-check-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>duration (hours)</h2>
                                          <div class="travel-select-icon">
                                             <select class="form-control" id="search_duration">
                                                <option value="1">1 hr</option><!-- /.option-->
                                                <option value="2">2 hrs</option><!-- /.option-->
                                                <option value="3">3 hrs</option><!-- /.option-->
                                                <option value="4">4 hrs</option><!-- /.option-->
                                                <option value="5">5 hrs</option><!-- /.option-->
                                                <option value="6">6 hrs</option><!-- /.option-->
                                                <option value="7">7 hrs</option><!-- /.option-->
                                                <option value="8">8 hrs</option><!-- /.option-->
                                                <option value="9">9 hrs</option><!-- /.option-->
                                                <option value="10">10 hrs</option><!-- /.option-->
                                                <option value="11">11 hrs</option><!-- /.option-->
                                                <option value="12">12 hrs</option><!-- /.option-->
                                                <option value="13">13 hrs</option><!-- /.option-->
                                                <option value="14">14 hrs</option><!-- /.option-->
                                                <option value="15">15 hrs</option><!-- /.option-->
                                                <option value="16">16 hrs</option><!-- /.option-->
                                                <option value="17">17 hrs</option><!-- /.option-->
                                                <option value="18">18 hrs</option><!-- /.option-->
                                                <option value="19">19 hrs</option><!-- /.option-->
                                                <option value="20">20 hrs</option><!-- /.option-->
                                                <option value="21">21 hrs</option><!-- /.option-->
                                                <option value="22">22 hrs</option><!-- /.option-->
                                                <option value="23">23 hrs</option><!-- /.option-->
                                                <option value="24">24 hrs</option><!-- /.option-->
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-1 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>members</h2>
                                          <div class="travel-select-icon">
                                             <select class="form-control ">

                                                <option value="default">1</option><!-- /.option-->

                                                <option value="2">2</option><!-- /.option-->

                                                <option value="4">4</option><!-- /.option-->
                                                <option value="8">8</option><!-- /.option-->

                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                 </div><!--/.row-->

                                 <div class="row">
                                    <div class="col-sm-5">
                                       <div class="travel-budget">
                                          <div class="row">
                                             <div class="col-md-3 col-sm-4">
                                                <h3>budget : </h3>
                                             </div><!--/.col-->
                                             <div class="co-md-9 col-sm-8">
                                                <div class="travel-filter">
                                                   <div class="info_widget">
                                                      <div class="price_filter">
                                                         
                                                         <div id="slider-range"></div><!--/.slider-range-->

                                                         <div class="price_slider_amount">
                                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                         </div><!--/.price_slider_amount-->
                                                      </div><!--/.price-filter-->
                                                   </div><!--/.info_widget-->
                                                </div><!--/.travel-filter-->
                                             </div><!--/.col-->
                                          </div><!--/.row-->
                                       </div><!--/.travel-budget-->
                                    </div><!--/.col-->
                                    <div class="clo-sm-7">
                                       <div class="about-btn travel-mrt-0 pull-right">
                                          <button  class="about-view travel-btn">
                                             search   
                                          </button><!--/.travel-btn-->
                                       </div><!--/.about-btn-->
                                    </div><!--/.col-->

                                 </div><!--/.row-->

                              </div><!--/.tab-para-->

                           </div><!--/.tabpannel-->

                           <div role="tabpanel" class="tab-pane fade in" id="hotels">
                              <div class="tab-para">

                                 <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="single-tab-select-box">

                                          <h2>destination</h2>

                                          <div class="travel-select-icon">
                                             <select class="form-control" id="search_location_2">
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->

                                          <div class="travel-select-icon">
                                             <select class="form-control" id="search_destination_2">
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->

                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>check in</h2>
                                          <div class="travel-check-icon">
                                             <form action="#">
                                                <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                                             </form>
                                          </div><!-- /.travel-check-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>check out</h2>
                                          <div class="travel-check-icon">
                                             <form action="#">
                                                <input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                             </form>
                                          </div><!-- /.travel-check-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>duration (hours)</h2>
                                          <div class="travel-select-icon">
                                             <select class="form-control" id="search_duration">
                                                <option value="1">1 hr</option><!-- /.option-->
                                                <option value="2">2 hrs</option><!-- /.option-->
                                                <option value="3">3 hrs</option><!-- /.option-->
                                                <option value="4">4 hrs</option><!-- /.option-->
                                                <option value="5">5 hrs</option><!-- /.option-->
                                                <option value="6">6 hrs</option><!-- /.option-->
                                                <option value="7">7 hrs</option><!-- /.option-->
                                                <option value="8">8 hrs</option><!-- /.option-->
                                                <option value="9">9 hrs</option><!-- /.option-->
                                                <option value="10">10 hrs</option><!-- /.option-->
                                                <option value="11">11 hrs</option><!-- /.option-->
                                                <option value="12">12 hrs</option><!-- /.option-->
                                                <option value="13">13 hrs</option><!-- /.option-->
                                                <option value="14">14 hrs</option><!-- /.option-->
                                                <option value="15">15 hrs</option><!-- /.option-->
                                                <option value="16">16 hrs</option><!-- /.option-->
                                                <option value="17">17 hrs</option><!-- /.option-->
                                                <option value="18">18 hrs</option><!-- /.option-->
                                                <option value="19">19 hrs</option><!-- /.option-->
                                                <option value="20">20 hrs</option><!-- /.option-->
                                                <option value="21">21 hrs</option><!-- /.option-->
                                                <option value="22">22 hrs</option><!-- /.option-->
                                                <option value="23">23 hrs</option><!-- /.option-->
                                                <option value="24">24 hrs</option><!-- /.option-->
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                    <div class="col-lg-2 col-md-1 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>members</h2>
                                          <div class="travel-select-icon">
                                             <select class="form-control ">

                                                <option value="default">1</option><!-- /.option-->

                                                <option value="2">2</option><!-- /.option-->

                                                <option value="4">4</option><!-- /.option-->
                                                <option value="8">8</option><!-- /.option-->

                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->
                                       </div><!--/.single-tab-select-box-->
                                    </div><!--/.col-->

                                 </div><!--/.row-->

                                 <div class="row">
                                    <div class="col-sm-5"></div><!--/.col-->
                                    <div class="clo-sm-7">
                                       <div class="about-btn travel-mrt-0 pull-right">
                                          <button  class="about-view travel-btn">
                                             search   
                                          </button><!--/.travel-btn-->
                                       </div><!--/.about-btn-->
                                    </div><!--/.col-->

                                 </div><!--/.row-->

                              </div><!--/.tab-para-->

                           </div><!--/.tabpannel-->

                        </div><!--/.tab content-->
                     </div><!--/.desc-tabs-->
                  </div><!--/.single-travel-box-->
               </div><!--/.col-->
            </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.travel-box-->
      <!--travel-box end-->

      <!--service start-->
      <section id="service" class="service">
         <div class="container">

            <div class="service-counter text-center">

               <div class="col-md-4 col-sm-4">
                  <div class="single-service-box">
                     <div class="service-img">
                        <img src="images/service/s1.png" alt="service-icon" />
                     </div><!--/.service-img-->
                     <div class="service-content">
                        <h2>
                           <a href="#">
                           amazing tour packages
                           </a>
                        </h2>
                        <p>Rhezon offers a wide variety of rental cars that will best serve your requirements. Whether you need a small vehicle to get around town, attending a conference and need to hire an MPV to carry your team or just require a luxurious drive in one of our premium vehicles, you can be sure to find the perfect car to rent with us.</p>
                     </div><!--/.service-content-->
                  </div><!--/.single-service-box-->
               </div><!--/.col-->

               <div class="col-md-4 col-sm-4">
                  <div class="single-service-box">
                     <div class="service-img">
                        <img src="images/service/s2.png" alt="service-icon" />
                     </div><!--/.service-img-->
                     <div class="service-content">
                        <h2>
                           <a href="#">
                              book top class hotel
                           </a>
                        </h2>
                        <p>As well as providing you with great choice for your next car hire, Rhezon, can also help with the added little extras, to help you on your way in comfort and safety. We provide airport pickup to make sure you arrive conveniently after boarding a flight</p>
                     </div><!--/.service-content-->
                  </div><!--/.single-service-box-->
               </div><!--/.col-->

               <div class="col-md-4 col-sm-4">
                  <div class="single-service-box">
                     <div class="statistics-img">
                        <img src="images/service/s3.png" alt="service-icon" />
                     </div><!--/.service-img-->
                     <div class="service-content">

                        <h2>
                           <a href="#">
                              online flight booking
                           </a>
                        </h2>
                        <p>As well as providing you with great choice for your next car hire, Rhezon, can also help with the added little extras, to help you on your way in comfort and safety. We provide airport pickup to make sure you arrive conveniently after boarding a flight</p>
                     </div><!--/.service-content-->
                  </div><!--/.single-service-box-->
               </div><!--/.col-->

            </div><!--/.statistics-counter-->   
         </div><!--/.container-->
      </section><!--/.service-->
      <!--service end-->

      <!--galley start-->
      <section id="gallery" class="gallery">
         <div class="container">
            <div class="gallery-details">
               <div class="gallary-header text-center">
                  <h2>
                     top destination
                  </h2>
                  <p>
                     Are Lagos, Abuja, Kogi, Port Harcourt, Jos, Kano, Kadunna,.  
                  </p>
               </div><!--/.gallery-header-->
               <div class="gallery-box">
                  <div class="gallery-content">
                     <div class="filtr-container">
                        <div class="row">

                           <div class="col-md-6">
                              <div class="filtr-item">
                                 <img src="images/gallary/lagos.jpg" alt="portfolio image"/>
                                 <div class="item-title">
                                    <a href="#">
                                       Lagos
                                    </a>
                                    <p><span>20 tours</span><span>15 places</span></p>
                                 </div><!-- /.item-title -->
                              </div><!-- /.filtr-item -->
                           </div><!-- /.col -->

                           <div class="col-md-6">
                              <div class="filtr-item">
                                 <img src="images/gallary/abuja.jpg" alt="portfolio image"/>
                                 <div class="item-title">
                                    <a href="#">
                                       Abuja
                                    </a>
                                    <p><span>12 tours</span><span>9 places</span></p>
                                 </div> <!-- /.item-title-->
                              </div><!-- /.filtr-item -->
                           </div><!-- /.col -->

                        </div><!-- /.row -->

                     </div><!-- /.filtr-container-->
                  </div><!-- /.gallery-content -->
               </div><!--/.galley-box-->
            </div><!--/.gallery-details-->
         </div><!--/.container-->
      </section><!--/.gallery-->
      <!--gallery end-->

      <!--discount-offer start-->
      <section class="discount-offer">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="dicount-offer-content text-center">
                     <h2>Join with us within 21 January, 2021 and get upto 40% Discount</h2>
                     <div class="campaign-timer">
                        <div id="timer">
                           <div class="time time-after" id="days">
                              <span></span>
                           </div><!--/.time-->
                           <div class="time time-after" id="hours">

                           </div><!--/.time-->
                           <div class="time time-after" id="minutes">

                           </div><!--/.time-->
                           <div class="time" id="seconds">

                           </div><!--/.time-->
                        </div><!--/.timer-->
                     </div><!--/.campaign-timer-->
                     <div class="about-btn">
                        <button  class="about-view discount-offer-btn">
                           join now
                        </button>
                     </div><!--/.about-btn-->


                  </div><!-- /.dicount-offer-content-->
               </div><!-- /.col-->
            </div><!-- /.row-->
         </div><!-- /.container-->
      </section><!-- /.discount-offer-->
      <!--discount-offer end-->

      <!--packages start-->
      <section id="pack" class="packages">
         <div class="container">
            <div class="gallary-header text-center">
               <h2>
                  special packages
               </h2>
               <p>
                  If you are looking for a travelling companion that can meet your every need there should be no other choice opt for the best! We got you covered  
               </p>
            </div><!--/.gallery-header-->
            <div class="packages-content">
               <div class="row">
                  @foreach($top_cars as $car)
                     <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                           <img src="{{ $car->screenshot->document_url }}" alt="package-place">
                           {{-- <img src="{{ $car->vehicle_photos->document_url }}" alt="package-place"> --}}
                           <div class="single-package-item-txt">
                              <h3>{{ ucfirst($car->model) }} <span class="pull-right">&#8358;{{ number_format($car->price, 2) }}</span></h3>
                              <div class="packages-para">
                                 <p>
                                    <span>
                                       <i class="fa fa-angle-right"></i> {{ $car->vehicle_type }}
                                    </span>
                                 </p>
                                 <p>
                                    <span>
                                       <i class="fa fa-angle-right"></i>  transportation
                                    </span>
                                  </p>
                              </div><!--/.packages-para-->
                              <div class="packages-review">
                                 <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>2544 review</span>
                                 </p>
                              </div><!--/.packages-review-->
                              <div class="about-btn">
                                 <button  class="about-view packages-btn" onclick="showBookNowModal({{ json_encode($car) }})">
                                    book now
                                 </button>
                              </div><!--/.about-btn-->
                           </div><!--/.single-package-item-txt-->
                        </div><!--/.single-package-item-->

                     </div><!--/.col-->
                  @endforeach

               </div><!--/.row-->
            </div><!--/.packages-content-->
         </div><!--/.container-->
      </section><!--/.packages-->
      <!--packages end-->

      <!-- testemonial Start -->
      <section   class="testemonial">
         <div class="container">

            <div class="gallary-header text-center">
               <h2>
                  clients reviews
               </h2>
               <p>
                  If you are looking for a travelling companion that can meet your every need there should be no other choice opt for the best! We got you covered 
               </p>

            </div><!--/.gallery-header-->

            <div class="owl-carousel owl-theme" id="testemonial-carousel">

               <div class="home1-testm item">
                  <div class="home1-testm-single text-center">
                     <div class="home1-testm-img">
                        <img src="images/client/testimonial1.jpg" alt="img"/>
                     </div><!--/.home1-testm-img-->
                     <div class="home1-testm-txt">
                        <span class="icon section-icon">
                           <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                           It was my first time hiring Rhezon. They made my family vacation awesome. Big thumbs up to the guys at Rhezon will do this again.. 
                        </p>
                        <h3>
                           <a href="#">
                              Ozioma Nwachukwu
                           </a>
                        </h3>
                        <h4>kuje, Abuja</h4>
                     </div><!--/.home1-testm-txt-->   
                  </div><!--/.home1-testm-single-->

               </div><!--/.item-->

               <div class="home1-testm item">
                  <div class="home1-testm-single text-center">
                     <div class="home1-testm-img">
                        <img src="images/client/testimonial2.jpg" alt="img"/>
                     </div><!--/.home1-testm-img-->
                     <div class="home1-testm-txt">
                        <span class="icon section-icon">
                           <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                           Excellent service, very prompt to response. I would recommend Rhezon car hire services anytime.. 
                        </p>
                        <h3>
                           <a href="#">
                              Ekpoto Matthew
                           </a>
                        </h3>
                        <h4> ikoyi, Lagos</h4>
                     </div><!--/.home1-testm-txt-->   
                  </div><!--/.home1-testm-single-->

               </div><!--/.item-->

               <div class="home1-testm item">
                  <div class="home1-testm-single text-center">
                     <div class="home1-testm-img">
                        <img src="images/client/testimonial1.jpg" alt="img"/>
                     </div><!--/.home1-testm-img-->
                     <div class="home1-testm-txt">
                        <span class="icon section-icon">
                           <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                           i love the Quick Respons, very prompt to response. I would recommend Rhezon car hire services to All my Friend.. 
                        </p>
                        <h3>
                           <a href="#">
                              James Adeniyi
                           </a>
                        </h3>
                        <h4>Kadunna, Kadunna</h4>
                     </div><!--/.home1-testm-txt-->   
                  </div><!--/.home1-testm-single-->

               </div><!--/.item-->

               <div class="home1-testm item">
                  <div class="home1-testm-single text-center">
                     <div class="home1-testm-img">
                        <img src="images/client/testimonial1.jpg" alt="img"/>
                     </div><!--/.home1-testm-img-->
                     <div class="home1-testm-txt">
                        <span class="icon section-icon">
                           <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                           At First, when my friend told me about Rhezon Car hire, i know they was something so special about it, I would recommend Rhezon car hire services to All my Friend . 
                        </p>
                        <h3>
                           <a href="#">
                              Liberty Bernard
                           </a>
                        </h3>
                        <h4>Lekki phase 1, Lagos</h4>
                     </div><!--/.home1-testm-txt-->   
                  </div><!--/.home1-testm-single-->

               </div><!--/.item-->

               <div class="home1-testm item">
                  <div class="home1-testm-single text-center">
                     <div class="home1-testm-img">
                        <img src="images/client/testimonial2.jpg" alt="img"/>
                     </div><!--/.home1-testm-img-->
                     <div class="home1-testm-txt">
                        <span class="icon section-icon">
                           <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                           Excellent service, very prompt to response. I would recommend Rhezon car hire services anytime... 
                        </p>
                        <h3>
                           <a href="#">
                              Dorcas Yakubu
                           </a>
                        </h3>
                        <h4>Kogi, Kogi</h4>
                     </div><!--/.home1-testm-txt-->   
                  </div><!--/.home1-testm-single-->

               </div><!--/.item-->

               <div class="home1-testm item">
                  <div class="home1-testm-single text-center">
                     <div class="home1-testm-img">
                        <img src="images/client/testimonial1.jpg" alt="img"/>
                     </div><!--/.home1-testm-img-->
                     <div class="home1-testm-txt">
                        <span class="icon section-icon">
                           <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <p>
                            i love the Quick Respons, very prompt to response. I would recommend Rhezon car hire services to All my Friend.. 
                        </p>
                        <h3>
                           <a href="#">
                              ThankGod Solomon
                           </a>
                        </h3>
                        <h4>Rumokoro, Port Harcourt</h4>
                     </div><!--/.home1-testm-txt-->   
                  </div><!--/.home1-testm-single-->

               </div><!--/.item-->



            </div><!--/.testemonial-carousel-->
         </div><!--/.container-->
      </section><!--/.testimonial-->   
      <!-- testemonial End -->

      <!--special-offer start-->
      <section id="spo" class="special-offer">
         <div class="container">
            <div class="special-offer-content">
               <div class="row">
                  <div class="col-sm-8">
                     <div class="single-special-offer">
                        <div class="single-special-offer-txt">
                           <h2>ABOUT RHEZON</h2>
                          
                           <div class="packages-para special-offer-para">
                              <p>At Rhezon Car rental, we not only pride ourselves on being a leading car rental company offering premium quality cars and highly efficient service, but we are also a company that can meet your every need, taking you anywhere that you might want to go. When on the road, Rhezon car rental can be your most trusted companion. The company is even able to offer advice and tips regarding vehicles and motoring that will help your company to grow successfully.
                              If you are looking for a travelling companion that can meet your every need there should be no other choice opt for the best! We got you covered. We have now achieved our goals of becoming a leader in both long and short term car rental business. We also offer a range of other cutting edge transportation services.
                              Each drive you take offers the chance to build new and perhaps long-lasting memories. So let Rhezon car rental join you on this journey and provide you with an experience that is, in may ways beyond driving</p>
                              {{-- <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                 </span>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 2 person
                                 </span>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  5 star accomodation
                                 </span>
                              </p>
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  transportation
                                 </span>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  food facilities
                                 </span>  
                              </p> --}}
                              <p class="offer-para">
                                 Each drive you take offers the chance to build new and perhaps long-lasting memories. So let Rhezon car rental join you on this journey and provide you with an experience that is, in may ways beyond driving.
                                 Tel: +234(0)80 39662017 (Open: 7am to 10pm, seven days a week) 
                              </p>
                           </div><!--/.packages-para-->

                            <div class="packages-review special-offer-review">
                              <p>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <span>2544 review</span>
                              </p>
                           </div><!--/.packages-review-->

                           <div class="offer-btn-group">
                              <div class="about-btn">
                                 <button  class="about-view packages-btn offfer-btn">
                                    make tour
                                 </button>
                              </div><!--/.about-btn-->
                              <div class="about-btn">
                                 <button  class="about-view packages-btn">
                                    book now
                                 </button>
                              </div><!--/.about-btn-->
                           </div><!--/.offer-btn-group-->
                        </div><!--/.single-special-offer-txt-->
                     </div><!--/.single-special-offer-->
                  </div><!--/.col-->
                  <div class="col-sm-4">
                     <div class="single-special-offer">
                        <div class="single-special-offer-bg">
                           <img src="images/offer/offer-shape.png" alt="offer-shape">
                        </div><!--/.single-special-offer-bg-->
                        <div class="single-special-shape-txt">
                           <h3>special offer</h3>
                           <h4><span>40%</span><br>off</h4>
                           <p><span>&#8358;999</span><br>reguler &#8358; 1450</p>
                        </div><!--/.single-special-shape-txt-->
                     </div><!--/.single-special-offer-->
                  </div><!--/.col-->
               </div><!--/.row-->
            </div><!--/.special-offer-content-->
         </div><!--/.container-->
      </section><!--/.special-offer end-->
      <!--special-offer end-->

      <!--blog start-->
      <section id="blog" class="blog">
         <div class="container">
            <div class="blog-details">
                  <div class="gallary-header text-center">
                     <h2>
                        Explore with Rhezon ride
                     </h2>
                     <p>
                       At Rhezon We have now achieved our goals of becoming a leader in both long and short term car rental business. We also offer a range of other cutting edge transportation services.
                        Each drive you take offers the chance to build new and perhaps long-lasting memories. So let Rhezon car rental join you on this journey and provide you with an experience that is, in may ways beyond driving
                     </p>
                  </div><!--/.gallery-header-->
               </div><!--/.blog-details-->
            </div><!--/.container-->
      </section><!--/.blog-->
      <!--blog end-->
      
      <!--subscribe start-->
      <section id="subs" class="subscribe">
         <div class="container">
            <div class="subscribe-title text-center">
               <h2>
                  Join our Subscribers List to Get Regular Update
               </h2>
               <p>
                  Subscribe Now. We will send you Best offer for your Trip 
               </p>
            </div>
            <form>
               <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <div class="custom-input-group">
                        <input type="email" class="form-control" placeholder="Enter your Email Here">
                        <button class="appsLand-btn subscribe-btn">Subscribe</button>
                        <div class="clearfix"></div>
                        <i class="fa fa-envelope"></i>
                     </div>

                  </div>
               </div>
            </form>
         </div>
      </section>
      <!--subscribe end-->

   <!-- SHOW BOOK NOW MODAL -->
    <div class="modal fade" id="book-now-modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Book</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" onsubmit="return false()">
                        <div class="row">
                           <div class="col-md-12" id="image-section"></div>
                           <div class="col-md-12" id="contents-section"></div>

                           <input type="hidden" id="car_id" name="car_id">
                           <input type="hidden" id="car_model" name="car_model">
                           <input type="hidden" id="car_year" name="car_year">
                           <input type="hidden" id="car_price" name="car_price">
                        </div>
                       <div class="row">
                          <div class="col-md-6">
                           <label for="customer_name">Name</label>
                             <div class="travel-user-icon">
                                <input type="text" id="customer_name" class="form-control" name="customer_name">
                             </div>
                          </div>

                          <div class="col-md-6">
                           <label for="customer_phone">Phone</label>
                             <div class="travel-check-icon">
                                <input type="text" id="customer_phone" class="form-control" name="customer_phone">
                             </div>
                          </div>
                       </div>

                       <div class="row">
                          <div class="col-md-12">
                           <label for="customer_email">Email</label>
                             <div class="travel-check-icon">
                                <input type="email" id="customer_email" class="form-control" name="customer_email">
                             </div>
                          </div>
                       </div>

                       <div class="row">
                           <div class="col-md-6">
                              <div class="single-tab-select-box">

                                 <h2>Location</h2>
                                 <div class="travel-select-icon">
                                    <select class="form-control" id="customer_location">
                                       <option value="default">Enter your location</option>
                                       <option value="1">Kogi</option><!-- /.option-->
                                       <option value="2">Central</option><!-- /.option-->
                                       <option value="3">Maitama</option><!-- /.option-->
                                       <option value="4">Gwarimpa</option><!-- /.option-->
                                       <option value="5">Abuja</option><!-- /.option-->
                                    </select><!-- /.select-->
                                 </div><!-- /.travel-select-icon -->

                                 <h2>Destination</h2>
                                 <div class="travel-select-icon">
                                    
                                    <select class="form-control" id="customer_destination">
                                       <option value="default">Enter your destination</option><!-- /.option-->
                                       <option value="1">Kogi</option><!-- /.option-->
                                       <option value="2">Central</option><!-- /.option-->
                                       <option value="3">Maitama</option><!-- /.option-->
                                       <option value="4">Gwarimpa</option><!-- /.option-->
                                       <option value="5">Abuja</option><!-- /.option-->
                                    </select><!-- /.select-->
                                 </div><!-- /.travel-select-icon -->

                              </div><!--/.single-tab-select-box-->
                           </div><!--/.col-->

                           <div class="col-md-6">
                              <div class="single-tab-select-box">
                                 <h2>Pick-up Date</h2>
                                 <div class="travel-check-icon">
                                    <form action="#">
                                       <input type="text" id="customer_pickup" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2021 ">
                                    </form>
                                 </div><!-- /.travel-check-icon -->
                              </div><!--/.single-tab-select-box-->
                           </div><!--/.col-->

                           <div class="col-md-6">
                              <div class="single-tab-select-box">
                                 <h2>Drop-off Date</h2>
                                 <div class="travel-check-icon">
                                    <form action="#">
                                       <input type="text" id="customer_dropoff" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2021">
                                    </form>
                                 </div><!-- /.travel-check-icon -->
                              </div><!--/.single-tab-select-box-->
                           </div><!--/.col-->

                           <div class="col-md-6">
                              <div class="single-tab-select-box">
                                 <h2>duration (hours)</h2>
                                 <div class="travel-select-icon">
                                    <select class="form-control" id="customer_duration">
                                       <option value="1">1 hr</option><!-- /.option-->
                                       <option value="2">2 hrs</option><!-- /.option-->
                                       <option value="3">3 hrs</option><!-- /.option-->
                                       <option value="4">4 hrs</option><!-- /.option-->
                                       <option value="5">5 hrs</option><!-- /.option-->
                                       <option value="6">6 hrs</option><!-- /.option-->
                                       <option value="7">7 hrs</option><!-- /.option-->
                                       <option value="8">8 hrs</option><!-- /.option-->
                                       <option value="9">9 hrs</option><!-- /.option-->
                                       <option value="10">10 hrs</option><!-- /.option-->
                                       <option value="11">11 hrs</option><!-- /.option-->
                                       <option value="12">12 hrs</option><!-- /.option-->
                                       <option value="13">13 hrs</option><!-- /.option-->
                                       <option value="14">14 hrs</option><!-- /.option-->
                                       <option value="15">15 hrs</option><!-- /.option-->
                                       <option value="16">16 hrs</option><!-- /.option-->
                                       <option value="17">17 hrs</option><!-- /.option-->
                                       <option value="18">18 hrs</option><!-- /.option-->
                                       <option value="19">19 hrs</option><!-- /.option-->
                                       <option value="20">20 hrs</option><!-- /.option-->
                                       <option value="21">21 hrs</option><!-- /.option-->
                                       <option value="22">22 hrs</option><!-- /.option-->
                                       <option value="23">23 hrs</option><!-- /.option-->
                                       <option value="24">24 hrs</option><!-- /.option-->
                                    </select><!-- /.select-->
                                 </div><!-- /.travel-select-icon -->
                              </div><!--/.single-tab-select-box-->
                           </div><!--/.col-->

                           <div class="col-md-6">
                              <div class="single-tab-select-box">
                                 <h2>members</h2>
                                 <div class="travel-select-icon">
                                    <select class="form-control" id="customer_members">
                                       <option value="1">1</option><!-- /.option-->
                                       <option value="2">2</option><!-- /.option-->
                                       <option value="3">3</option><!-- /.option-->
                                       <option value="4">4</option><!-- /.option-->
                                       <option value="5">5</option><!-- /.option-->
                                       <option value="8">8</option><!-- /.option-->
                                    </select><!-- /.select-->
                                 </div><!-- /.travel-select-icon -->
                              </div><!--/.single-tab-select-box-->
                           </div><!--/.col-->

                        </div><!--/.row-->


                        <div class="row">
                          <div class="col-md-12 text-center">
                             <button class="about-view packages-btn" onclick="payWithPaystack()">
                                Pay
                             </button>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="pull-right">
                        <button class="btn btn-flat" type="button" data-dismiss="modal">
                            close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="text/javascript">
      fetchLocation();

        function payWithPaystack(){
            var customer   = $("#customer_name").val();
            var phone      = $("#customer_phone").val();
            var email      = $("#customer_email").val();
            var car_price  = $("#car_price").val();
            var amount     = parseInt(car_price) * 100;

            var handler = PaystackPop.setup({
             key: '{{ env("PAYSTACK_PUBLIC_KEY") }}',
             email: email,
             amount: amount,
             currency: "NGN",
             ref: 'RHEZONX'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
             metadata: {
                custom_fields: [
                   {
                       display_name: "Mobile Number",
                       variable_name: "mobile_number",
                       value: phone
                   }
                ]
             },
                callback: function(response){
                    // alert('success. transaction ref is ' + response.reference);
                    var reference = response.reference;
                    saveOrderRequest(reference);
                },
                onClose: function(){
                    alert('window closed');
                }
            });
       handler.openIframe();
     }

        function saveOrderRequest(reference) {
            var _token = '{{ csrf_token() }}';
            var customer   = $("#customer_name").val();
            var phone      = $("#customer_phone").val();
            var email      = $("#customer_email").val();
            var location = $("#customer_location").val();
            var destination = $("#customer_destination").val();
            var pickup = $("#customer_pickup").val();
            var dropoff = $("#customer_dropoff").val();
            var duration = $("#customer_duration").val();
            var members = $("#customer_members").val();
            var car_id     = $("#car_id").val();

            var query = {_token, amount, reference, customer, phone, email, car_id, location, destination, pickup, dropoff, duration, members}

            fetch(`{{url('book/order')}}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
            }).catch(err => {
                console.log(err);
            });
        }

        $(".travel-btn").click((e) => {
            e.preventDefault();
            window.location.href = "{{url('search-rides')}}";
        });

        function showBookNowModal(car) {
            $("#car_id").val(car.id);
            $("#car_model").val(car.model);
            $("#car_year").val(car.year);
            $("#car_price").val(car.price);

            $("#image-section").html(`
                <img src="${car.screenshot.document_url}" class="rounded" />
            `);

            $("#contents-section").html(`
                <br />
            `);

            $("#book-now-modal").modal({
                backdrop: false
            });
        }

        function fetchLocation() {
            fetch('{{url("database/location.json")}}').then(r => r.json()).then(data => {
                $("#customer_location").html('');
                $("#customer_location").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#customer_location").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#customer_destination").html('');
                $("#customer_destination").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#customer_destination").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#search_location").html('');
                $("#search_location").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_location").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#search_destination").html('');
                $("#search_destination").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_destination").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });


                $("#search_location_2").html('');
                $("#search_location_2").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_location_2").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                $("#search_destination_2").html('');
                $("#search_destination_2").append(`
                    <option value="">-- select state --</option>
                `);
                $.each(data, function(index, val) {
                    /* iterate through array or object */
                    $("#search_destination_2").append(`
                        <option value="${val.name}">${val.name}</option>
                    `);
                });

                

            }).catch(err => {
              console.log(err);
            });
        }

        function showLocalGovt(){
            var state = $("#state").val();
            // console.log(state);
            $.getJSON("/database/location.json", function(data){
                $.each(data, function(index, val) {
                    if(state == val.name){
                        $("#lga").html("");
                        $.each(val.lga, function(index, val){
                            $("#lga").append(`
                                <option value="${val}">${val}</option>
                            `);
                        })
                    }
                });
            });
        }
    </script>
@endsection