<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GoSakit - Admin</title>

    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/pickadate/themes/default.date.css') }}">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!-- Header -->
        @include('admin.layouts.header')

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Body -->
        @yield('content')

        <!-- Footer -->
        @include('admin.layouts.footer')

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/js/dashboard/patient-details.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src=" {{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- Form validate init -->
    <script src="{{ asset('assets/js/plugins-init/jquery.validate-init.js') }}"></script>

    <!-- momment js is must -->
    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>

    <script>
        (function($) {
            var table = $('#example5').DataTable({
                searching: false,
                paging: true,
                select: false,
                lengthChange: false

            });
            $('#example tbody').on('click', 'tr', function() {
                var data = table.row(this).data();

            });
        })(jQuery);
    </script>

    <script type="text/javascript">
        $('.addmulti').on('click', function() {
            addmulti();
        });

        function addmulti() {
            var multi = '<div><div class="mb-3 row"><label class="text-label">Pilih Tanggal</label><div class="col-sm-9"><input type="datetime-local" class="form-control w-100" id="scheduledate" value="{{ is_array(old('
            scheduledate ')) ? old('
            scheduledate ')[0] : old('
            scheduledate ') }}" name="scheduledate[]" style="border: 1px solid #000000; color: #000000;" required>@error('
            scheduledate ')<div class="invalid-feedback">{{ $message }}</div>@enderror<a href="#" class="remove btn btn-danger plus float-right">-</a></div></div></div>';
            $('.multi').append(multi);
        };

        $(document).on('click', '.remove', function() {
            $(this).parent().parent().remove();
        });
    </script>

</body>

</html>