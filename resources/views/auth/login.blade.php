@extends('layouts.app')

@section('contents')

<!-- Login Start -->
<section class="login-section">
 <div class="container">
    <div class="row align-items-center">
       <div class="col-lg-6" >
          <div class="login-left">
             <div class="login-text owl-carousel">
                <div class="login-slide-item">
                   <img class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" src="{{asset('img/login-image-2.png')}}" alt="login image" />
                   <h2 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">A few more clicks to <br>sign in to your account. </h2>
                </div>
                <div class="login-slide-item">
                   <img class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" src="{{asset('img/login-image-3.png')}}" alt="login image" />
                   <h2 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">A few more clicks to <br>sign in to your account. </h2>
                </div>
                <div class="login-slide-item">
                   <img class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" src="{{asset('img/login-image-2.png')}}" alt="login image" />
                   <h2 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">A few more clicks to <br>sign in to your account. </h2>
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
                <h3 class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">sign in to your account</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   </p>
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   </p>

                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                       {{-- <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                   </p>
                   <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                      <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                   </p>
                </form>
                <div class="login-action wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
                   <p><a href="{{url('reset')}}">Forgot Password?</a></p>
                   <p><a href="{{url('register')}}">Don't have an account?</a></p>
                </div>
                {{-- <div class="login-policy wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
                   <p><a href="login.html#">Terms of use</a></p>
                   <p><a href="login.html#">Privacy Policy</a></p>
                </div> --}}
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
