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
        <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
          <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="auth-form-transparent text-left p-3">
                  <div class="brand-logo">
                    <img src="{{url('frontEnd/images/logo.png')}}" alt="logo">
                  </div>
                  <h4>Welcome back!</h4>
                  <h6 class="font-weight-light">Happy to see you again!</h6>
                  <form class="pt-3">
                    <div class="form-group">
                      <label for="exampleInputEmail">Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-account-outline text-primary"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-lock-outline text-primary"></i>
                          </span>
                        </div>
                        <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
                      </div>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">
                          Keep me signed in
                        </label>
                      </div>
                      <a href="#" class="auth-link text-black">Forgot password?</a>
                    </div>
                    <div class="my-3">
                      <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">LOGIN</a>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021  All rights reserved.</p>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
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