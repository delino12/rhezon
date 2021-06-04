@extends('layouts.app-main-admin')

@section('title')
    {{ env("APP_NAME") }} - Notifications & System Logs
@endsection

@section('contents')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cars
                        <a href="javascript:void(0);" onclick="showAddCarsModal()" class="btn btn-outline-primary float-right btn-sm">New</a>
                    </h6>
                    
                </div>
                <div class="card-body">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Vehicle</th>
                                <th>Price</th>
                                <th>Reference</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>
                                    {{ $order->name }}
                                </td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>
                                    {{ $order->vehicle->model }}
                                    <p>
                                        {{-- {!! $order->vehicle->features !!} --}}
                                    </p>
                                </td>
                                <td>&#8358;{{ number_format($order->vehicle->price, 2) }}</td>
                                <td>{{ $order->reference }}</td>
                                <td>
                                    <a href="javascript:void(0);" onclick="viewOrder({{ json_encode($order) }})" class="btn btn-outline-info btn-sm">
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- ADD CAR MODAL -->
    <div class="modal fade" id="view-order-modal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Order Request</h4>
                </div>
                <div class="modal-body">
                    <div id="load-order-information"></div>
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
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        function viewOrder(order) {
            console.log(order)
            // show modal
            $("#load-order-information").html(`
                <h5 class="py-2">${order.name} Ride Request </h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Customer</td>
                            <td>${order.name}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>${order.email}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>${order.phone}</td>
                        </tr>
                        <tr>
                            <td>Reference</td>
                            <td>${order.reference}</td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td>${order.location.name}</td>
                        </tr>
                        <tr>
                            <td>Destination</td>
                            <td>${order.destination.name}</td>
                        </tr>
                        <tr>
                            <td>Pickup Date</td>
                            <td>${moment(order.pickup_date).format('LL')}</td>
                        </tr>
                        <tr>
                            <td>Drop-off Date</td>
                            <td>${moment(order.dropoff_date).format('LL')}</td>
                        </tr>
                        <tr>
                            <td>Vehicle</td>
                            <td>${order.vehicle.model}</td>
                        </tr>
                        <tr>
                            <td>Amount Paid</td>
                            <td>&#8358;${order.vehicle.price}</td>
                        </tr>
                    </tbody>
                </table>
            `);
            $("#view-order-modal").modal();
        }
    </script>
@endsection