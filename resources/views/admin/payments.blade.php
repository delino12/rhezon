@extends('layouts.app-main-admin')

@section('title')
    {{ env("APP_NAME") }} - Payment Gateway
@endsection

@section('contents')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ Auth::guard('admin')->user()->name }}'s Payment Settings</h6>
                </div>
                <div class="card-body">
                    Settings
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 0 @endphp
                            @foreach($payment_gateway as $gateway)
                            @php $sn++ @endphp
                                <tr>
                                    <td>{{ $sn }}</td>
                                    <td> 
                                        <img src="{{asset('images')}}/{{ strtolower($gateway->name).'.png' }}" width="32px" height="32px">
                                        {{ $gateway->name }}

                                    </td>
                                    <td>

                                        @if($gateway->is_default == true)
                                            <span class="text-success">Active</span>
                                        @elseif($gateway->is_default == false)
                                            <span class="text-danger">Inactive</span>
                                        @endif

                                    </td>
                                    <td>
                                        @if($gateway->is_default == false)
                                            <a href="{{url('admin/payment')}}/{{ $gateway->id }}" class="btn btn-outline-success btn-sm">
                                                Set as Default
                                            </a>
                                        @elseif($gateway->is_default == true)
                                            <a href="javascript:void(0);" class="btn btn-outline-danger btn-sm">
                                                Deactived!
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        
@endsection

@section('scripts')
    <script>
        
    </script>
@endsection