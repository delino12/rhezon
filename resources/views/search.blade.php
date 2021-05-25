@extends('layouts.app')

@section('title')
   Search
@endsection

@section('contents')
      <!--about-us start -->

      <!--travel-box start-->
      <section class="travel-box about-us">
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
                                             <select class="form-control ">
                                                <option value="default">enter your location</option>
                                                <option value="1">Kogi</option><!-- /.option-->
                                                <option value="2">Central</option><!-- /.option-->
                                                <option value="3">Maitama</option><!-- /.option-->
                                                <option value="4">Gwarimpa</option><!-- /.option-->
                                                <option value="5">Abuja</option><!-- /.option-->
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->

                                          <div class="travel-select-icon">
                                             <select class="form-control ">

                                                <option value="default">enter your destination</option><!-- /.option-->
                                                <option value="1">Kogi</option><!-- /.option-->
                                                <option value="2">Central</option><!-- /.option-->
                                                <option value="3">Maitama</option><!-- /.option-->
                                                <option value="4">Gwarimpa</option><!-- /.option-->
                                                <option value="5">Abuja</option><!-- /.option-->
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

                                    <div class="col-lg-2 col-md-1 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>duration</h2>
                                          <div class="travel-select-icon">
                                             <select class="form-control ">

                                                <option value="default">5</option><!-- /.option-->

                                                <option value="10">10</option><!-- /.option-->

                                                <option value="15">15</option><!-- /.option-->
                                                <option value="20">20</option><!-- /.option-->

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
                                             <select class="form-control ">
                                                <option value="default">enter your location</option>
                                                <option value="1">Kogi</option><!-- /.option-->
                                                <option value="2">Central</option><!-- /.option-->
                                                <option value="3">Maitama</option><!-- /.option-->
                                                <option value="4">Gwarimpa</option><!-- /.option-->
                                                <option value="5">Abuja</option><!-- /.option-->
                                             </select><!-- /.select-->
                                          </div><!-- /.travel-select-icon -->

                                          <div class="travel-select-icon">
                                             <select class="form-control ">

                                                <option value="default">enter your destination</option><!-- /.option-->
                                                <option value="1">Kogi</option><!-- /.option-->
                                                <option value="2">Central</option><!-- /.option-->
                                                <option value="3">Maitama</option><!-- /.option-->
                                                <option value="4">Gwarimpa</option><!-- /.option-->
                                                <option value="5">Abuja</option><!-- /.option-->
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

                                    <div class="col-lg-2 col-md-1 col-sm-4">
                                       <div class="single-tab-select-box">
                                          <h2>duration</h2>
                                          <div class="travel-select-icon">
                                             <select class="form-control ">

                                                <option value="default">5</option><!-- /.option-->

                                                <option value="10">10</option><!-- /.option-->

                                                <option value="15">15</option><!-- /.option-->
                                                <option value="20">20</option><!-- /.option-->

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

      <!--packages start-->
      <section id="pack" class="packages">
         <div class="container">
            <div class="gallary-header text-center">
               <h2>
                  available rides
               </h2>
               <p>
                  See all available cars and offers 
               </p>
            </div><!--/.gallery-header-->
            <div class="packages-content">
               <div class="row">

                  <div class="col-md-4 col-sm-6">
                     <div class="single-package-item">
                        <img src="images/packages/p1.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                           <h3>italy <span class="pull-right">&#8358;499</span></h3>
                           <div class="packages-para">
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                 </span>
                                 <i class="fa fa-angle-right"></i>  5 star accomodation
                              </p>
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  transportation
                                 </span>
                                 <i class="fa fa-angle-right"></i>  food facilities
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
                              <button  class="about-view packages-btn">
                                 book now
                              </button>
                           </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                     </div><!--/.single-package-item-->

                  </div><!--/.col-->

                  <div class="col-md-4 col-sm-6">
                     <div class="single-package-item">
                        <img src="images/packages/p2.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                           <h3>england <span class="pull-right">&#8358;1499</span></h3>
                           <div class="packages-para">
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                 </span>
                                 <i class="fa fa-angle-right"></i>  5 star accomodation
                              </p>
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  transportation
                                 </span>
                                 <i class="fa fa-angle-right"></i>  food facilities
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
                              <button  class="about-view packages-btn">
                                 book now
                              </button>
                           </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                     </div><!--/.single-package-item-->

                  </div><!--/.col-->
                  
                  <div class="col-md-4 col-sm-6">
                     <div class="single-package-item">
                        <img src="images/packages/p3.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                           <h3>france <span class="pull-right">&#8358;1199</span></h3>
                           <div class="packages-para">
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                 </span>
                                 <i class="fa fa-angle-right"></i>  5 star accomodation
                              </p>
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  transportation
                                 </span>
                                 <i class="fa fa-angle-right"></i>  food facilities
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
                              <button  class="about-view packages-btn">
                                 book now
                              </button>
                           </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                     </div><!--/.single-package-item-->

                  </div><!--/.col-->
                  
                  <div class="col-md-4 col-sm-6">
                     <div class="single-package-item">
                        <img src="images/packages/p4.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                           <h3>india <span class="pull-right">&#8358;799</span></h3>
                           <div class="packages-para">
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                 </span>
                                 <i class="fa fa-angle-right"></i>  5 star accomodation
                              </p>
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  transportation
                                 </span>
                                 <i class="fa fa-angle-right"></i>  food facilities
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
                              <button  class="about-view packages-btn">
                                 book now
                              </button>
                           </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                     </div><!--/.single-package-item-->

                  </div><!--/.col-->
                  
                  <div class="col-md-4 col-sm-6">
                     <div class="single-package-item">
                        <img src="images/packages/p5.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                           <h3>spain <span class="pull-right">&#8358;999</span></h3>
                           <div class="packages-para">
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                 </span>
                                 <i class="fa fa-angle-right"></i>  5 star accomodation
                              </p>
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  transportation
                                 </span>
                                 <i class="fa fa-angle-right"></i>  food facilities
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
                              <button  class="about-view packages-btn">
                                 book now
                              </button>
                           </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                     </div><!--/.single-package-item-->

                  </div><!--/.col-->
                  
                  <div class="col-md-4 col-sm-6">
                     <div class="single-package-item">
                        <img src="images/packages/p6.jpg" alt="package-place">
                        <div class="single-package-item-txt">
                           <h3>thailand <span class="pull-right">&#8358;799</span></h3>
                           <div class="packages-para">
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i> 5 daays 6 nights
                                 </span>
                                 <i class="fa fa-angle-right"></i>  5 star accomodation
                              </p>
                              <p>
                                 <span>
                                    <i class="fa fa-angle-right"></i>  transportation
                                 </span>
                                 <i class="fa fa-angle-right"></i>  food facilities
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
                              <button  class="about-view packages-btn">
                                 book now
                              </button>
                           </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                     </div><!--/.single-package-item-->

                  </div><!--/.col-->

               </div><!--/.row-->
            </div><!--/.packages-content-->
         </div><!--/.container-->
      </section><!--/.packages-->
      <!--packages end-->

      <!--special-offer start-->
      <section id="spo" class="special-offer">
         <div class="container">
            <div class="special-offer-content">
               <div class="row">
                  <div class="col-sm-8">
                     <div class="single-special-offer">
                        <div class="single-special-offer-txt">
                           <h2>Transcorp Special</h2>
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
                           <div class="packages-para special-offer-para">
                              <p>
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
                              </p>
                              <p class="offer-para">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna  aliqua. Ut enim ad minim veniam, quis nostrud exercitation una <br> ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                              </p>
                           </div><!--/.packages-para-->
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
                        Experience comfort and security...
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
@endsection

@section('scripts')
   <script type="text/javascript">
      $(".travel-btn").click((e) => {
         e.preventDefault();


         window.location.href = "{{url('search-rides')}}";
      });
   </script>
@endsection