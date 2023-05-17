@extends('backend.main.main_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .form-check-label {
            text-transform: capitalize;
        }
    </style>
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Add Roles In Permission</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post"
                                action="">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Role Name </label>
                                        <select name="role_id" class="form-select" id="example-select">
                                            <option> Select One Role </option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-check mb-2 form-check-primary">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customckeck16">
                                            <label class="form-check-label" for="customckeck16">All Permissions</label>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                                @foreach ($permission_groups as $group)
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-check mb-2 form-check-primary">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="customckeck15">
                                                <label class="form-check-label"
                                                    for="customckeck15">{{ $group->group_name }}</label>
                                            </div>
                                        </div>

                                        <div class="col-9">
                                            @php
                                                $permissions = App\Models\User::getPermissionByGroupName($group->group_name);
                                            @endphp
                                            @foreach ($permissions as $permission)
                                                <div class="form-check mb-2 form-check-primary">
                                                    <input class="form-check-input" name="permission[]" type="checkbox"
                                                        value="{{ $permission->id }}" id="customckeck{{ $permission->id }}">
                                                    <label class="form-check-label"
                                                        for="customckeck15">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach
                                            <br>
                                        </div>

                                    </div>
                                @endforeach


                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                    Changes</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#customckeck16').click(function() {
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked', true);
            } else {
                $('input[type = checkbox]').prop('checked', false);
            }
        });
    </script>
@endsection
