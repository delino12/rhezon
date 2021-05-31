@extends('layouts.app-main-admin')


@section('title')
    {{ env("APP_NAME") }} - Ads & Promotions Logs
@endsection

@section('contents')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ Auth::guard('admin')->user()->name }}'s Settings</h6>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
        
@endsection

@section('scripts')
    <script>
        
    </script>
@endsection