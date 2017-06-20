<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="app">
<head>  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="Eric ku"/>

  <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <link rel="stylesheet" href="./assets/back_assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="./assets/back_assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="./assets/back_assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="./assets/back_assets/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="./assets/back_assets/css/font.css" type="text/css" />
  <link rel="stylesheet" href="./assets/back_assets/css/app.css" type="text/css" /> 
  <link rel="stylesheet" href="./assets/back_assets/js/datepicker/datepicker.css" type="text/css" /> 
  <link rel="stylesheet" href="assets/back_assets/css/bootstrap-fileupload.min.css" type="text/css" />
   <!-- Scripts -->
<script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="bg-info dker">