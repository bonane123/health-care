@extends('backend.main.main_dashboard')
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add New Hospital</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{ route('hospital.add.new') }}" >
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="name"
                                                placeholder="hospital name">
                                            <label for="floatingInput">Hospital name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingPassword" name="email"
                                                placeholder="youremail@gmail.com">
                                            <label for="floatingPassword">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" name="phone"
                                                placeholder="hospital name">
                                            <label for="floatingInput">Hospital phone number</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" name="hospital_id"
                                                aria-label="Floating label select example">
                                                <option>--select category--</option>
                                                @foreach ($hospital_types as $hospital_type)
                                                
                                                    <option value="{{ $hospital_type->id }}">
                                                        {{ $hospital_type->category }}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">select the hospital level</label>
                                        </div>
                                        <div class="row g-2">

                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelectGrid" name="province_id"
                                                        aria-label="Floating label select example">
                                                        <option>--select province--</option>
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province->provincecode }}">
                                                                {{ $province->provincename }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelectGrid">Select province</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelectGrid" name="district_id"
                                                        aria-label="Floating label select example">
                                                        @foreach ($districts as $district)
                                                            <option value="{{ $district->districtcode }}">
                                                                {{ $district->districtname }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelectGrid">Select district</label>
                                                </div>
                                            </div>


                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelectGrid" name="sector_id"
                                                        aria-label="Floating label select example">
                                                        @foreach ($sectors as $sector)
                                                            <option value="{{ $sector->sectorcode }}">
                                                                {{ $sector->sectorname }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelectGrid">Select sector</label>
                                                </div>
                                            </div>
                                            <div class="col-md mb-3">
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelectGrid" name="cell_id"
                                                        aria-label="Floating label select example">
                                                        @foreach ($cells as $cell)
                                                            <option value="{{ $cell->cellcode }}">
                                                                {{ $cell->cellname }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelectGrid">Select cell</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a description of the hospital" id="floatingTextarea2" name="description"
                                                style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Description</label>
                                        </div>


                                    </div>
                                    <div class="col-md " >

                                        <button class="btn btn-success text-light fw-bold" >Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="province_id"]').on('change', function() {
                var province_id = $(this).val();
                if (province_id) {
                    $.ajax({
                        url: "{{ url('/district/ajax') }}/" + province_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="district_id"]').html('');
                            var d = $('select[name="district_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append(
                                    '<option value="' + value.districtcode + '"> ' +
                                    value
                                    .districtname + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function() {
                var district_id = $(this).val();
                if (district_id) {
                    $.ajax({
                        url: "{{ url('/sector/ajax') }}/" + district_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="sector_id"]').html('');
                            var d = $('select[name="sector_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="sector_id"]').append(
                                    '<option value="' + value.sectorcode + '"> ' +
                                    value
                                    .sectorname + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="sector_id"]').on('change', function() {
                var sector_id = $(this).val();
                if (sector_id) {
                    $.ajax({
                        url: "{{ url('/cell/ajax') }}/" + sector_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="cell_id"]').html('');
                            var d = $('select[name="cell_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="cell_id"]').append(
                                    '<option value="' + value.cellcode + '"> ' +
                                    value
                                    .cellname + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
    
    @endsection
