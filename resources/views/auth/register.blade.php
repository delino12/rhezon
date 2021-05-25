@extends('layouts.app')

@section('contents')
<!-- Login Start -->
<section class="login-section">
 <div class="container">
    <div class="row align-items-center">
       <div class="col-lg-6">
          <div class="login-left">
             <div class="login-text owl-carousel">
                <div class="login-slide-item">
                   <img class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" src="{{asset('img/login-image-2.png')}}" alt="login image" />
                   <h2 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">A few more clicks to <br>sign up to your account. </h2>
                </div>
                <div class="login-slide-item">
                   <img class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" src="{{asset('img/login-image-3.png')}}" alt="login image" />
                   <h2 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">A few more clicks to <br>sign up to your account. </h2>
                </div>
                <div class="login-slide-item">
                   <img class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" src="{{asset('img/login-image-2.png')}}" alt="login image" />
                   <h2 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">A few more clicks to <br>sign up to your account. </h2>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-6">
          <div class="login-right">
             <div class="login-logo pt-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="{{url('/')}}">
                  <i class="fa fa-arrow-left"></i> Home
                </a>
             </div>
             <div class="login-form">
                <h3 class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">sign up to your account</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="names" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   </p>
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   </p>
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   </p>
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                   </p>
                   <p class="custom-checkbox wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
                      <input id="agree" type="checkbox" name="type5">
                      <label for="agree">I agree to the <a href="#">Privacy Policy</a></label>
                      <span class="checkbox"></span>
                   </p>
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
                      <button type="submit">Register</button>
                   </p>
                </form>
                <div class="login-action wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.9s">
                   <p><a href="{{url('login')}}">Already have an account?</a></p>
                </div>
                <div class="login-policy wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                   <p><a href="#">Terms of use</a></p>
                   <p><a href="#">Privacy Policy</a></p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Login End -->
@endsection

@section('scripts')
  <script type="text/javascript">
    $("body").addClass('login');
  </script>
@endsection
