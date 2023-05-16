@extends('backend.main.main_dashboard')
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                                        <a href="{{ route('add.hospital') }}" class="btn btn-primary text-light fw-bold" >
                                            Add Hospital
                                        </a>
                                    </div>
                        <h4 class="page-title">All Hospitals</h4>
                        
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Hospitals in Rwanda</h4>
                            {{-- <p class="sub-header">
                                include filtering in your FooTable.
                        </p> --}}

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
                                            <th data-toggle="true">Hospital</th>
                                            <th>Category</th>
                                            <th data-hide="phone">Province</th>
                                            <th data-hide="phone, tablet">District</th>
                                            <th data-hide="phone, tablet">Sector</th>
                                            <th data-hide="phone, tablet">Cell</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hospitals as $hospital )
                                        <tr>
                                            <td>{{ $hospital->name }}</td>
                                            <td>{{ $hospital['hospital']['category'] }}</td>
                                            <td>{{ $hospital['province']['provincename'] }}</td>
                                            <td>{{ $hospital['district']['districtname'] }}</td>
                                            <td>{{ $hospital['sector']['sectorname'] }} </td>
                                            <td>{{ $hospital['cell']['cellname'] }}</td>
                                            
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
            <!-- end row -->
        </div>
    </div>
@endsection

