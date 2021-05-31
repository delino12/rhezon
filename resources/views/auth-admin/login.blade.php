@extends('layouts.app-auth-admin')

@section('title')
    {{ env("APP_NAME") }} - Admin Login
@endsection

@section('contents')
    <div class="container mt-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6" style="min-height: 600px;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="mt-5 mb-5">
                                            <a href="{{url('/')}}" class="">
                                                <img src="{{asset('images/logo.png')}}" height="auto" width="40%;">
                                            </a>
                                        </div>
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        <p>
                                            Admin Panel
                                        </p>
                                    </div>
                                    <form class="user" method="POST" onsubmit="return loginAdmin();">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="admin_email" name="admin_email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                            <br />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="admin_password" name="admin_password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    {{-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        function loginAdmin(){
            // body...
            var token = '{{ csrf_token() }}';
            var admin_email = $("#admin_email").val();
            var admin_password = $("#admin_password").val();

            // data to json
            var data = {
                _token: token,
                admin_email:admin_email,
                admin_password:admin_password
            };

            // ajax query
            $.ajax({
                url: '/admin/login',
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function(data){
                    if(data.status == 'success'){
                        window.location.href = '/admin/dashboard';
                    }else{
                        swal(
                            "Oops!",
                            data.message,
                            data.status
                        );
                    }
                },
                error: function(data){
                    swal(
                        "Oops",
                        "Server error, try again!",
                        "info"
                    );
                }
            });

            $("#login-btn").html('Login');

            // prevent form action from loading 
            return false;
        }
    </script>
@endsection