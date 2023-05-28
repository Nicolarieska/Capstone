<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
</head>

<body>

    <!-- Body -->
    @yield('content')

    <!-- JS -->
    <script src="{{ asset('assets/vendor/form-jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/form-jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/form-jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/form-jquery-steps/jquery.steps.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>