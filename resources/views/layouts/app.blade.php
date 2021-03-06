<!DOCTYPE html>
<html>
<head>
    <title>Vereinsmanager</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Enes Kul" name="author">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="/assets/components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="/assets/components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/assets/components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="/assets/components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/assets/components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/assets/components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/assets/css/main.css?version=4.3.0" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>
<body class="@yield('body-class')">
<div class="all-wrapper with-side-panel solid-bg-all">
    <div class="layout-w">
        @include('partials.navigation-mobile')
        @include('partials.navigation')
        <div class="{{ config('app.layout') }}">
            @yield('content')
        </div>
    </div>
</div>
<script src="/assets/components/jquery/dist/jquery.min.js"></script>
<script src="/assets/components/popper.js/dist/umd/popper.min.js"></script>
<script src="/assets/components/moment/moment.js"></script>
<script src="/assets/components/chart.js/dist/Chart.min.js"></script>
<script src="/assets/components/select2/dist/js/select2.full.min.js"></script>
<script src="/assets/components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="/assets/components/ckeditor/ckeditor.js"></script>
<script src="/assets/components/bootstrap-validator/dist/validator.min.js"></script>
<script src="/assets/components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/assets/components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="/assets/components/dropzone/dist/dropzone.js"></script>
<script src="/assets/components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="/assets/components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="/assets/components/tether/dist/js/tether.min.js"></script>
<script src="/assets/components/slick-carousel/slick/slick.min.js"></script>
<script src="/assets/components/bootstrap/js/dist/util.js"></script>
<script src="/assets/components/bootstrap/js/dist/alert.js"></script>
<script src="/assets/components/bootstrap/js/dist/button.js"></script>
<script src="/assets/components/bootstrap/js/dist/carousel.js"></script>
<script src="/assets/components/bootstrap/js/dist/collapse.js"></script>
<script src="/assets/components/bootstrap/js/dist/dropdown.js"></script>
<script src="/assets/components/bootstrap/js/dist/modal.js"></script>
<script src="/assets/components/bootstrap/js/dist/tab.js"></script>
<script src="/assets/components/bootstrap/js/dist/tooltip.js"></script>
<script src="/assets/components/bootstrap/js/dist/popover.js"></script>
<script src="/assets/js/main.js?version=4.3.0"></script>
@yield('scripts')
</body>
</html>