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
                    
                </div>
            </div>
        </div>
    </div>


    <!-- ADD CAR MODAL -->
    <div class="modal fade" id="add-car-modal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Car</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" onsubmit="return addCar()" enctype="multipart/form-data">
                        <div class="row py-4">
                            <div class="col-md-6">
                                <label for="vehicle_type">Which best describe your vehicle type?</label>
                                <select class="form-control" id="vehicle_type" name="vehicle_type">
                                    <option value=""> -- select -- </option>
                                    <option value="Suv">SUV</option>
                                    <option value="Car">Car</option>
                                    <option value="Bus">Bus</option>
                                </select>
                                <input type="hidden" id="hidden_vehicle_id" name="">
                            </div>
                            <div class="col-md-6">
                                <label for="vehicle_type_reg">Vehicle registration type</label>
                                <select class="form-control" id="vehicle_type_reg" name="vehicle_type_reg">
                                    <option value=""> -- select -- </option>
                                    <option value="private" selected>Private</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                                <input type="hidden" id="update_flag" name="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" class="form-control" name="model" id="model" placeholder="Tesla Model X">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <input type="number" min="1900" max="2099" step="1" id="year" placeholder="Eg. 2023" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="reg_number">Registration Number (Plate)</label>
                                    <input type="text" class="form-control" name="reg_number" id="reg_number" placeholder="Eg. XVD-AA45XX">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="color">Vehicle Color <span class="small">(Optional)</span></label>
                                    <input type="text" class="form-control" name="color" id="color" placeholder="Eg. Blue SUV">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discount_price">Discount (Promotion) <span class="small">(Optional)</span></label>
                                    <input type="text" class="form-control" name="discount_price" id="discount_price" placeholder="Discount price">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location_axis">Location Axis</label>
                                    <select class="form-control" id="location_axis">
                                        <option value="default">Enter your location</option>
                                        <option value="1">Kogi</option><!-- /.option-->
                                        <option value="2">Central</option><!-- /.option-->
                                        <option value="3">Maitama</option><!-- /.option-->
                                        <option value="4">Gwarimpa</option><!-- /.option-->
                                        <option value="5">Abuja</option><!-- /.option-->
                                    </select><!-- /.select-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="destination_axis">Destination Axis</label>
                                    <select class="form-control" id="destination_axis">
                                        <option value="default">Enter your destination</option>
                                        <option value="1">Kogi</option><!-- /.option-->
                                        <option value="2">Central</option><!-- /.option-->
                                        <option value="3">Maitama</option><!-- /.option-->
                                        <option value="4">Gwarimpa</option><!-- /.option-->
                                        <option value="5">Abuja</option><!-- /.option-->
                                    </select><!-- /.select-->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="vehicle_screenshots">
                                        Screenshots
                                    </label>
                                    <input type="file" onchange="readVehicleScreenShot(this)" class="form-control" multiple="true">
                                </div>
                            </div>
                        </div>

                        <div class="row py-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="features">
                                        Car Features
                                    </label>
                                    <textarea class="form-control" id="features" placeholder="Car features..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button class="btn btn-outline-primary">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
        $(document).ready(function() {
            $("#features").summernote();
        });

        var raw_vehicle_files_box = [];
        function readVehicleScreenShot(element) {
            $.each(element.files, function(index, val) {
                raw_vehicle_files_box.push({
                    fileData: val
                });

                /* iterate through array or object */
                var file = element.files[index];
                var reader  = new FileReader();

                reader.onloadend = async function (e) {

                }

                if (file) {
                    //reads the data as a URL
                    reader.readAsDataURL(file);
                }
            });
        }
        
        function showAddCarsModal() {
            // show modal
            $("#add-car-modal").modal();
        }

        function addCar() {
            // body...
            var _token              = '{{ csrf_token() }}';
            var vehicle_type        = $("#vehicle_type").val();
            var hidden_vehicle_id   = $("#hidden_vehicle_id").val();
            var vehicle_type_reg    = $("#vehicle_type_reg").val();
            var update_flag         = $("#update_flag").val();
            var model               = $("#model").val();
            var year                = $("#year").val();
            var reg_number          = $("#reg_number").val();
            var color               = $("#color").val();
            var price               = $("#price").val();
            var discount_price      = $("#discount_price").val();
            var location_axis       = $("#location_axis").val();
            var destination_axis    = $("#destination_axis").val();
            var features            = $("#features").val();
            var car_screenshots     = raw_vehicle_files_box;
            
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "cars/add?_token="+_token);
            xhr.upload.addEventListener("progress", function(e){
                var percent = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
            });

            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    let results = JSON.parse(xhr.responseText);
                    console.log(results);
                }
            }

            var form_data = new FormData();
            car_screenshots.forEach( function(element, index) {
                form_data.append(`car_screenshots[${index}]`, car_screenshots[index].fileData, car_screenshots[index].fileData.name);
            });
            form_data.append('vehicle_type', vehicle_type);
            form_data.append('hidden_vehicle_id', hidden_vehicle_id);
            form_data.append('vehicle_type_reg', vehicle_type_reg);
            form_data.append('update_flag', update_flag);
            form_data.append('model', model);
            form_data.append('year', year);
            form_data.append('reg_number', reg_number);
            form_data.append('color', color);
            form_data.append('price', price);
            form_data.append('discount_price', discount_price);
            form_data.append('location_axis', location_axis);
            form_data.append('destination_axis', destination_axis);
            form_data.append('features', features);
            xhr.send(form_data);

            // void
            return false;
        }

        
    </script>
@endsection