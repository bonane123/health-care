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
                        <h4 class="page-title">System users </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-2">
                                <div class="row row-cols-sm-auto g-2 align-items-center">
                                    <div class="col-12 text-sm-center">
                                        <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                            <option value="">Show all</option>
                                            <option value="owner">Owner</option>
                                            <option value="admin">Admin</option>
                                            <option value="evaluator">Evaluator</option>
                                            <option value="usaba">Usaba</option>
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
                                            <th data-toggle="true">Names</th>
                                            <th data-toggle="true">Email</th>
                                            <th data-toggle="true">Role</th>
                                            
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->roles->implode('name', ',') }}</td>
                                                

                                                
                                                <td>
                                                    
                                                        <a href="{{ route('dashboard.pages.user.edit', $user->id) }}"
                                                            class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
                                                   


                                                    
                                                        @if ($user->status == 'inactive')
                                                            <a href="{{ route('dashboard.pages.user.delete', $user->id) }}"
                                                                class="btn btn-danger rounded-pill waves-effect waves-light"
                                                                title="InActive"><i class="fa-solid fa-thumbs-down"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('dashboard.pages.user.undelete', $user->id) }}"
                                                                class="btn btn-success rounded-pill waves-effect waves-light"
                                                                title="Active"><i class="fa-solid fa-thumbs-up"></i></a>
                                                        @endif
                                                    

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
