@extends('layouts.app-main-admin')

@section('title')
    {{ env("APP_NAME") }} - User's Management
@endsection

@section('contents')

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Shippers Users</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered small" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Joined Date</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($users as $user)
                            		<tr>
                                        <td>
                                            <a href="javascript:void(0);" onclick="viewUserProfile({{ json_encode($user) }})">
                                                {{ $user->name }}
                                            </a>
                                        </td>
                            			<td>{{ $user->email }}</td>
                            			<td>{{ $user->user_bio->location ?? 'None' }}</td>
                            			<td>
                            				<span class="small">{{ $user->created_at->format("d M Y") }}</span>
                            			</td>
                                        <td class="text-success">Active</td>
                            			{{-- <td>

                                            @if($user->account_access == null)
                                                <a href="javascript:void(0);" onclick="blockAccount({{ $user->id }})" class="btn btn-primary btn-icon-split btn-sm">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-flag"></i>
                                                    </span>
                                                    <span class="text small">Block</span>
                                                </a>
                                            @elseif($user->account_access !== null && $user->account_access->status == 2)
                                                <a href="javascript:void(0);" onclick="unblockAccount({{ $user->id }})" class="btn btn-success btn-icon-split btn-sm">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-flag"></i>
                                                    </span>
                                                    <span class="text small">Unblock</span>
                                                </a>
                                            @else
                                                <a href="javascript:void(0);" onclick="blockAccount({{ $user->id }})" class="btn btn-primary btn-icon-split btn-sm">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-flag"></i>
                                                    </span>
                                                    <span class="text small">Block</span>
                                                </a>
                                            @endif

                                        </td> --}}
                            		</tr>
                            	@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        function blockAccount(user_id) {

            var _token  = '{{ csrf_token() }}';
            var query   = {user_id, _token}

            fetch(`{{url('block/account/access')}}`, {
                method: 'POST',
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

                setTimeout(() => {
                    window.location.reload();
                }, 1000 * 4)
            }).catch(err => {
                console.log(err);
            });
        }

        function unblockAccount(user_id) {
            var _token  = '{{ csrf_token() }}';
            var query   = {user_id, _token}

            fetch(`{{url('unblock/account/access')}}`, {
                method: 'POST',
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

                setTimeout(() => {
                    window.location.reload();
                }, 1000 * 4)
            }).catch(err => {
                console.log(err);
            });
        }

        function viewUserProfile(user) {
            // console.log(user);
            if(user.account_type_id == 1){
                user.account_type = "Shipper's Account";
            }else if(user.account_type_id == 2){
                user.account_type = "Carrier's Account";
            }
            $("#view-user-details").html(`
                <p>${user.account_type}</p>
                <table class="table">
                    <tr>
                        <td>Company</td>
                        <td>${user.company}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>${user.name}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>${user.email}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>${user.address}</td>
                    </tr>
                    <tr>
                        <td>Mobile Phone</td>
                        <td>${user.phone}</td>
                    </tr>
                    <tr>
                        <td>Device Token</td>
                        <td>${user.device_token}</td>
                    </tr>
                    <tr>
                        <td>Date Joined</td>
                        <td>${moment(user.created_at).format("LTS")}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            `);
            $("#show-user-profile").modal();
        }
    </script>
@endsection
