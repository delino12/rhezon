@extends('layouts.app-main-admin')

@section('title')
    {{ env("APP_NAME") }} - Timeline Overview
@endsection

@section('contents')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Activation requests</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered small" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="javascript:void(0);" onclick="checkAll()" class="">
                                            All
                                        </a>
                                    </th>
                                    <th>Names</th>
                                    <th>Email</th>
                                    <th>Account Verification</th>
                                    <th>Account Type</th>
                                    <th>Date Created</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    @if($user->account_type_id == 2)
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="check-box-{{ $user->id }}" onclick="toggleCheck({{ $user->id }})" name="">
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>

                                                {{-- @if($user->user_bio->is_verified ?? 0 == "1") --}}
                                                    <a class="btn btn-outline-danger btn-sm small">
                                                        <i class="fa fa-check-circle"></i> Not Verified
                                                    </a>
                                                {{-- @else
                                                    <a class="btn btn-outline-success btn-sm small">
                                                        <i class="fa fa-check-circle"></i> Verified
                                                    </a>
                                                @endif --}}
                                                    
                                            </td>
                                            <td>
                                                @if($user->account_type_id == 1)
                                                    Shipper's Account
                                                @elseif($user->account_type_id == 2)
                                                    Carrier's Account
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user->created_at->format("Y-m-d h:ia") }}
                                            </td>
                                            <td>
                                                <span class="text-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" onclick="viewDocument({{ json_encode($user) }})" class="btn btn-outline-primary btn-sm">
                                                    View Document
                                                </a>
                                                <a href="javascript:void(0);" onclick="approveAccount({{ json_encode($user) }})" class="btn btn-outline-success btn-sm">
                                                    Approve
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            <tfoot class="small">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="javascript:void(0);" onclick="approveSelected()" class="btn btn-outline-success btn-sm small">
                                           <i class="fa fa-check-circle"></i> Approve
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" onclick="approveSelected()" class="btn btn-outline-danger btn-sm small">
                                           <i class="fa fa-times"></i> Reject
                                        </a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- show-view-document-modal -->
    <div class="modal fade" id="show-view-document-modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="user-name-title"></h4>
                </div>
                <div class="modal-body">
                    <div id="load-user-information"></div>
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
    <script type="text/javascript">
        function approveAccount(user) {
            var user_id = user.id;
            var _token = '{{ csrf_token() }}';
            var query = {_token, user_id}

            fetch(`{{url('admin/approve/account')}}`, {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                // console.log(results);
                swal(
                    results.status,
                    results.message,
                    results.status
                );
            }).catch(err => {
                console.log(err);
            });
        }

        function viewDocument(user) {
            $("#user-name-title").html(user.name)
            // console.log(user);
            $("#load-user-information").html(`
                <table class="table">
                    <thead>
                        <tr>
                            <td>Personal Information</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

                <br /><br />
                <table class="table">
                    <thead>
                        <tr>
                            <td>Identity</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>

                <br /><br />
                <table class="table">
                    <thead>
                        <tr>
                            <td>Guarantor's Information</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>


                <br /><br />
                <table class="table">
                    <thead>
                        <tr>
                            <td>Vehicle</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>


                <br /><br />
                <table class="table">
                    <thead>
                        <tr>
                            <td>Account Information</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            `);
            $("#show-view-document-modal").modal();
        }
    </script>
@endsection