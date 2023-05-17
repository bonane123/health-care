@extends('backend.layout.dashboard')
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">Edit Permission</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Permission</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('dashboard.pages.permission.update') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $permission->id }}">

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Permission Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            value="{{ $permission->name }}">
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Group Name </label>
                                        <select name="group_name" class="form-select" id="example-select">
                                            <option> Select One Permission Group </option>

                                            <option value="ikibaho"
                                                {{ $permission->group_name == 'ikibaho' ? 'selected' : '' }}>Ikibaho
                                            </option>
                                            <option value="ibisabwa"
                                                {{ $permission->group_name == 'ibisabwa' ? 'selected' : '' }}>ibisabwa
                                            </option>
                                            <option value="users"
                                                {{ $permission->group_name == 'users' ? 'selected' : '' }}>Users
                                            </option>
                                            <option value="ubusabe"
                                                {{ $permission->group_name == 'ubusabe' ? 'selected' : '' }}>Ubusabe
                                            </option>
                                            <option value="ibyiciro"
                                                {{ $permission->group_name == 'ibyiciro' ? 'selected' : '' }}>Ibyiciro
                                            </option>
                                            <option value="amakuru"
                                                {{ $permission->group_name == 'amakuru' ? 'selected' : '' }}>Amakuru
                                            </option>
                                            <option value="evaluate"
                                                {{ $permission->group_name == 'evaluate' ? 'selected' : '' }}>Evaluate
                                            </option>
                                            <option value="role"
                                                {{ $permission->group_name == 'role' ? 'selected' : '' }}>Role |
                                                Permission </option>

                                        </select>
                                    </div>

                                </div>





                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                    Changes</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
