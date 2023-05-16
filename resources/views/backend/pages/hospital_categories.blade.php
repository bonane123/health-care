@extends('backend.main.main_dashboard')
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Hospital Category</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Bootstrap Validation - Normal</h4>
                            <p class="sub-header">Provide valuable, actionable feedback to your users with HTML5 form
                                validation–available in all our supported browsers.</p> --}}

                            <form class="needs-validation" method="POST" action="{{ route('hospital.category.store') }}" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Hospital Category</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="category"
                                        placeholder="Category name" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <button class="btn btn-success" type="submit">Save</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Hospital system in Rwanda</h4>
                            

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $category)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $category->category }}</td>
                                            
                                        </tr>
                                            
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
