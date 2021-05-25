@extends('layouts.app')

@section('contents')
<!-- Breadcrumb Start -->
      <section class="breadcrumb-area">
         <div class="breadcrumb-shape"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-inn">
                     <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2>Hi, {{ auth()->user()->name }}</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb End -->
       
       
      <!-- Service Section Start -->
      <section class="service-section service-page section_100">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                     <div class="service-icon">
                        <i class="flaticon-picture"></i>
                     </div>
                     <div class="service-title">
                        <h3>Image Processing</h3>
                     </div>
                     <div class="service-desc">
                        <p> Make use of our state of the art image classification to identify product types.</p>
                        <a class="btn-simple mt-3" href="{{url('images')}}">Get started <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     <div class="service-icon-bottom">
                        <i class="flaticon-picture"></i>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-6">
                  <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                     <div class="service-icon">
                        <i class="flaticon-facial-recognition"></i>
                     </div>
                     <div class="service-title">
                        <h3>Face Recognition</h3>
                     </div>
                     <div class="service-desc">
                        <p> Utilize our accurate facial analysis capabilities  to detect, analyze, and compare faces.</p>
                        <a class="btn-simple mt-3" href="{{url('faces')}}">Get started <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     <div class="service-icon-bottom">
                        <i class="flaticon-facial-recognition"></i>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-6">
                  <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                     <div class="service-icon">
                        <i class="flaticon-video-player"></i>
                     </div>
                     <div class="service-title">
                        <h3>Video Analytics</h3>
                     </div>
                     <div class="service-desc">
                        <p> Identify shoppers and track their activity across your space, through CCTV video. </p>
                        <a class="btn-simple mt-3" href="{{url('videos')}}">Get started <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     <div class="service-icon-bottom">
                        <i class="flaticon-video-player"></i>
                     </div>
                  </div>
               </div>

               
               <div class="col-lg-4 col-md-6">
                  <div class="service-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                     <div class="service-icon">
                        <i class="flaticon-box"></i>
                     </div>
                     <div class="service-title">
                        <h3>Data Visualization</h3>
                     </div>
                     <div class="service-desc">
                        <p>Transform your data into a visual dashboard, for easy identification of trends and quick creation of reports.</p>
                        <a class="btn-simple mt-3" href="{{url('data')}}">Get started <i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     <div class="service-icon-bottom">
                        <i class="flaticon-box"></i>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!-- Service Section End -->
@endsection
