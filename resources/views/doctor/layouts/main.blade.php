<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GoSakit - Admin</title>

    <!-- Favicon icon -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">

    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animated/animate.min.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

    <script>
        (function($) {
            var table = $('#example5').DataTable({
                searching: false,
                paging: true,
                select: false,
                //info: false,         
                lengthChange: false

            });
            $('#example tbody').on('click', 'tr', function() {
                var data = table.row(this).data();

            });
        })(jQuery);
    </script>

    <script>
        function previewEdit(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function(e) {
                var image = document.getElementById("preview_edit");
                image.src = e.target.result;
                image.style.width = "200px"; // Sesuaikan dengan ukuran yang diinginkan
                image.style.height = "200px"; // Sesuaikan dengan ukuran yang diinginkan
                image.style.objectFit = "cover";
                image.style.borderRadius = "50%";
            };

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function(e) {
                var image = document.getElementById("preview_image");
                image.src = e.target.result;
                image.style.width = "200px"; // Sesuaikan dengan ukuran yang diinginkan
                image.style.height = "200px"; // Sesuaikan dengan ukuran yang diinginkan
                image.style.objectFit = "cover";
                image.style.borderRadius = "50%";
            };

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        function showModal(imageSrc) {
            var modal = document.getElementById('modal');
            var modalContent = document.getElementById('modal-content');
            var modalImage = document.getElementById('modal-image');

            modalImage.src = imageSrc;
            modalImage.onload = function() {
                var imageWidth = modalImage.width;
                var imageHeight = modalImage.height;

                modal.style.display = 'block';
                modalContent.style.width = imageWidth + 'px';
                modalContent.style.height = imageHeight + 'px';

                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        hideModal();
                    }
                });
            };
        }

        function hideModal() {
            var modal = document.getElementById('modal');

            modal.style.display = 'none';
        }
    </script>

</body>

</html>