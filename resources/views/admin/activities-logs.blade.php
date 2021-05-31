@extends('layouts.app-main-admin')

@section('title')
    {{ env("APP_NAME") }} - Activity Logs
@endsection

@section('contents')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Logs</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table small">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>User</th>
                                    <th>Route</th>
                                    <th>Details</th>
                                    <th>IP (Addr)</th>
                                    <th>OS / Client Browser</th>
                                    <th>Last Seen</th>
                                </tr>
                            </thead>
                            <tbody class="load-audit-events"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection

@section('scripts')
    <script src="{{ asset('codedreamer/js/jquery.datatable.min.js') }}"></script>
    <script src="{{ asset('codedreamer/js/bootstrap.datatable.min.js') }}"></script>
    <script src="{{ asset('codedreamer/js/datatable.buttons.min.js') }}"></script>
    <script src="{{ asset('codedreamer/js/jszip.min.js') }}"></script>
    <script src="{{ asset('codedreamer/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('codedreamer/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('codedreamer/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript">
        // load module
        fetchAuditTrails();

        function showAuditTrailDetails(file_name, file_path) {
            // body...
            $(".preview_details").html(``);
            $("#view-audit-trail-modal").modal();
        }

        function showViewEventByModal(event_by) {
            // console log data
            console.log(event_by);
            fetchAuditTrailsByUserId(event_by);
            $("#view-audit-trail-by-user-modal").modal();
        }

        function fetchAuditTrails() {
            fetch("{{url('footprint/all')}}", {
                method: "GET",
            }).then(r => {
                return r.json();
            }).then(results => {
                // console.log(results);
                let sn = 0;
                $(".load-audit-events").html("");
                $.each(results, function(index, val) {
                    sn++;
                    $(".load-audit-events").append(`
                        <tr>
                            <td>${sn}</td>
                            <td>
                                <a href="javascript:void(0);" onclick="showViewEventByModal('${val.EventByID}')" class="">
                                    <i class="fa fa-user"></i>
                                    ${val.by} 
                                    <span class="text-warning">
                                        (${val.email})
                                    </span>
                                </a>
                            </td>
                            <td>${val.page}</td>
                            <td>
                                <span class="text-primary">${val.details}</span>
                            </td>
                            <td><i class="fa fa-globe"></i> ${val.ip}</td>
                            <td><i class="fa fa-tv"></i> ${val.browser}</td>
                            <td>
                                <i class="fa fa-clock"></i> ${val.last_seen}
                                <br />
                                ${val.date_seen}
                            </td>
                        </tr>
                    `);
                });

                $("#footprint-table").DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                });
            }).catch(err => {
                console.log(err);
            });
        }

        function fetchAuditTrailsByUserId(user_id) {
            fetch("{{url('footprint/one')}}/"+user_id, {
                method: "GET",
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                let sn = 0;
                $(".load-audit-by-user-events").html("");
                $.each(results, function(index, val) {
                    sn++;
                    $(".load-audit-by-user-events").append(`
                        <tr>
                            <td>${sn}</td>
                            <td>
                                <i class="fa fa-user"></i>
                                ${val.EventBy} 
                                <span class="text-warning">
                                    (${val.EventEmail})
                                </span>
                            </td>
                            <td>${val.EventDetails}</td>
                            <td>
                                ${val.EventBy} is active on <span class="text-warning">${val.EventDetails}</span>
                            </td>
                            <td>${val.EventIp}</td>
                            <td><i class="fa fa-tv"></i> ${val.EventBrowser}</td>
                            <td>${val.created_at}</td>
                        </tr>
                    `);

                    $("#activity_table").dataTable();
                });
            }).catch(err => {
                console.log(err);
            });
        }

        function deleteLog(action) {
            var _token = '{{ csrf_token() }}';
            var query = {_token, action}

            fetch(`{{ url('footprint') }}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                if(results.status == "success"){
                    fetchAuditTrails();
                }
            }).catch(err => {
                console.log(err);
            });
        }
    </script>
@endsection