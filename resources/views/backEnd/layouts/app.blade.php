<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{$title}}</title>
  <link rel="stylesheet" href="{{url('/backEnd/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('/backEnd/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{url('/backEnd/css/style.css')}}">
  <link rel="shortcut icon" href="{{url('frontEnd/images/logo.png')}}" />
  <script src="https://kit.fontawesome.com/63272607d0.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-scroller d-flex">
    @include('backEnd.layouts.sidebar')
    @include('backEnd.layouts.main')
  </div>

  <!-- base:js -->
  <script src="/backEnd/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="/backEnd/vendors/chart.js/Chart.min.js"></script>
  <script src="/backEnd/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/backEnd/js/off-canvas.js"></script>
  <script src="/backEnd/js/hoverable-collapse.js"></script>
  <script src="/backEnd/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
    <script src="/backEnd/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="/backEnd/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>