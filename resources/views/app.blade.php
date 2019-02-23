<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ระบบส่งเอกสารเพื่อขอกำหนดแต่งตั้งตำแหน่งทางวิชาการ</title>
        <!-- Favicon -->
        <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="/assets/css/argon.css?v=1.0.0'" rel="stylesheet">
        <link type="text/css" href="/assets/css/animate.css" rel="stylesheet">
    </head>
    <body>
        <div id="app"></div>

        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Optional JS -->
        <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="/assets/js/argon.js?v=1.0.0"></script>
    </body>
    </html>