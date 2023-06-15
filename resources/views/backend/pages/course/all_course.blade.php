@extends('backend.main.main_dashboard')
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        
                        <h4 class="page-title">Products</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between">
                               
                                <div class="col-auto">
                                    <div class="text-lg-end my-1 my-lg-0">
                                        
                                        <a href="{{ route('add.course') }}"
                                            class="btn btn-success waves-effect waves-light"><i
                                                class="mdi mdi-plus-circle me-1"></i> Add New</a>
                                    </div>
                                </div><!-- end col-->
                            </div> <!-- end row -->
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i
                                        class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i
                                        class="mdi mdi-close"></i></a>
                            </div>
                            <div class=" aspect-ratio" style="aspect-ratio: 1;">
                                <img src="{{ asset('backend/assets/images/products/patient.png') }}" alt="product-pic"
                                    class="img-fluid aspect-ratio-item" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html"
                                                class="text-dark">Patient Education</a> </h5>
                                        
                                        <h5 class="m-0"> <span class="text-muted"> 2 Read</span></h5>
                                    </div>
                                    
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i
                                        class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i
                                        class="mdi mdi-close"></i></a>
                            </div>

                            <div class=" aspect-ratio" style="aspect-ratio: 1;">
                                <img src="{{ asset('backend/assets/images/products/health.jpg') }}" alt="product-pic"
                                    class="img-fluid aspect-ratio-item" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html"
                                                class="text-dark">Health Care Providers</a> </h5>
                                        
                                        <h5 class="m-0"> <span class="text-muted"> 5 Read</span></h5>
                                    </div>
                                    
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->



            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
    @endsection
