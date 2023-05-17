@extends('backend.main.main_dashboard')
@section('admin')
    <div class="content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        {{-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Foo Tables</li>
                    </ol>
                </div> --}}
                        <h4 class="page-title">All Roles </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Add Role</h4> --}}
                            <form id="myForm" method="post" action="{{ route('dashboard.pages.role.add') }}"
                                class="mb-3 parsley-examples">
                                @csrf


                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Role Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Add Role" required>
                                    </div>

                                </div>







                                <button type="submit" class="btn btn-primary waves-effect waves-light">Ohereza</button>

                            </form>

                            <div class="mb-2">
                                <div class="row row-cols-sm-auto g-2 align-items-center">
                                    <div class="col-12 text-sm-center">
                                        <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                            <option value="">Show all</option>
                                            <option value="active">Active</option>
                                            <option value="disabled">Disabled</option>
                                            <option value="suspended">Suspended</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input id="demo-foo-search" type="text" placeholder="Search"
                                            class="form-control form-control-sm" autocomplete="on">
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0"
                                    data-page-size="7">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true">Number</th>
                                            <th data-toggle="true">Role</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $key => $role)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    <a href=""
                                                        class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

                                                    <a href=""
                                                        class="btn btn-danger rounded-pill waves-effect waves-light"
                                                        id="delete">Delete</a>

                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr class="active">
                                            <td colspan="5">
                                                <div class="text-end">
                                                    <ul
                                                        class="pagination pagination-rounded justify-content-end footable-pagination mb-0">
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>


        </div>
    </div>
@endsection
