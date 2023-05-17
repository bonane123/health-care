@extends('backend.layout.dashboard')
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
                        <h4 class="page-title">Edit Roles </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Add Role</h4> --}}
                            <form id="myForm" method="post" action="{{ route('dashboard.pages.role.update') }}"
                                class="mb-3 parsley-examples">
                                @csrf

                                @method('PUT')
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Role Name </label>
                                        <input type="text" name="id" class="form-control visually-hidden "
                                            id="inputEmail4" value="{{ $role->id }}">
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Add Role" value="{{ $role->name }}" required>
                                    </div>

                                </div>







                                <button type="submit" class="btn btn-primary waves-effect waves-light">Ohereza</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
