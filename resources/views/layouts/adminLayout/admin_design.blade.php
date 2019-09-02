<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/matrix-media.css')}}" />
<link href="{{ asset('fonts/backendfonts/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/backend/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('layouts.adminLayout.admin_header')

@include('layouts.adminLayout.admin_sidebar')

@yield('content')

@include('layouts.adminLayout.admin_footer')



<script src="{{ asset('js/backendjs/jquery.min.js')}}"></script> 
<script src="{{ asset('js/backendjs/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset('js/backendjs/bootstrap.min.js')}}"></script> 
<script src="{{ asset('js/backendjs/jquery.uniform.js')}}"></script> 
<script src="{{ asset('js/backendjs/select2.min.js')}}"></script> 
<script src="{{ asset('js/backendjs/jquery.validate.js')}}"></script> 
<script src="{{ asset('js/backendjs/matrix.js')}}"></script>
<script src="{{ asset('js/backendjs/jquery.datatables.min.js')}}"></script>
<script src="{{ asset('js/backendjs/matrix.tables.js')}}"></script> 
<script src="{{ asset('js/backendjs/matrix.form_validation.js')}}"></script>
</body>
</html>
