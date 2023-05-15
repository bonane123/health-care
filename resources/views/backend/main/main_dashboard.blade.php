<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>TELEGERNE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon1.png') }}">
    <link href="../css/toastr.css" rel="stylesheet">

    <!-- Plugins css -->
    <link href="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="{{ asset('backend/assets/js/head.js') }}"></script>
    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
    <!-- inputTags css -->
    <link href="{{ asset('backend/assets/libs/mohithg-switchery/switchery.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <script src="https://cdn.tiny.cloud/1/iizlj523i5eqn69zaeqeazru3520qfo4gd33o70v2ogsboxx/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <script src="{{ asset('backend/assets/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>


</head>

<!-- body start -->

<body data-layout-mode="default" data-theme="light" data-topbar-color="light" data-menu-position="fixed"
    data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('backend.body.header')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.body.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            @yield('admin')
            <!-- content -->

            <!-- Footer Start -->
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        @include('backend.body.footer')
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('backend/assets/js/pages/dashboard-1.init.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/assets/js/code.js') }}"></script>
    <!-- Footable js -->
    <script src="{{ asset('backend/assets/libs/footable/footable.all.min.js') }}"></script>

    <!-- Init js -->
    <script src="{{ asset('backend/assets/js/pages/foo-tables.init.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/dropify/js/dropify.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('backend/assets/js/pages/form-fileuploads.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- InputTags js-->
    <script src="{{ asset('backend/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/mohithg-switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>
    <!-- InputTags js-->
    <script src="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="assets/js/pages/jquery.todo.js"></script>
    <!-- Init js-->
    <script src="{{ asset('backend/assets/js/pages/form-wizard.init.js') }}"></script>
    <!-- Dashboard init js -->
    <!-- Plugin js-->
    <script src="{{ asset('backend/assets/libs/parsleyjs/parsley.min.js') }}"></script>

    <!-- Validation init js-->
    <script src="{{ asset('backend/assets/js/pages/form-validation.init.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('backend/assets/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/autonumeric/autoNumeric.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('backendassets/libs/jquery.scrollto/jquery.scrollTo.min.js/') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/dashboard-3.init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/jquery.chat.js') }}"></script>
    <!-- Init js-->
    <script src="{{ asset('backend/assets/js/pages/form-masks.init.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if (session('toastr'))
        <script>
            toastr.options = {!! json_encode(session('toastr')['options']) !!};
            toastr.{{ session('toastr')['type'] }}('{{ session('toastr')['message'] }}');
        </script>
    @endif

</body>

</html>
