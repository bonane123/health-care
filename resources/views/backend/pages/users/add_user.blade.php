@extends('backend.main.main_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Add User</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('dashboard.pages.user.store') }}"
                                class="parsley-examples">
                                @csrf

                                <div class="row">


                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Names </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> User Name </label>
                                        <input type="text" name="username" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Phone </label>
                                        <input type="number" name="phone" class="form-control" id="inputEmail4" required>
                                    </div>


                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Email </label>
                                        <input type="email" name="email" class="form-control" id="inputEmail4" required>
                                    </div>




                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Assign Role</label>
                                        <select name="roles" class="form-select" id="example-select" required>
                                            {{-- <option disabled > Select One Role </option> --}}
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="inputEmail4"
                                            required>
                                    </div>
                                    

                                </div>



                                <button type="submit"
                                    class="btn btn-success waves-effect waves-light">Save
                                </button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    username: {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    username: {
                        required: 'Please Enter User Name',
                    },
                    name: {
                        required: 'Please Enter Your Name',
                    },
                    email: {
                        required: 'Please Enter Your Email',
                    },
                    phone: {
                        required: 'Please Enter Your Phone',
                    },
                    password: {
                        required: 'Please Enter Your Password',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
