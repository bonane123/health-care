@extends('backend.main.main_dashboard')
@section('admin')
    <div class="content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Hospital Category </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Edit Hospital Category</h4> --}}
                            <form method="POST" action="{{ route('hospital.category.edit.store') }}"
                                class="mb-3 parsley-examples">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">

                                    <input type="text" name="category" class="form-control" id="icyiciro"
                                         value="{{ $category->category }}" required>
                                    <input type="text" name="id" class="form-control visually-hidden" id="category"
                                        value="{{ $category->id }}">
                                </div>

                                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
