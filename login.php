<head>

  <meta charset="utf-8" />
  <title>Login | Dynamowebs - Admin panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="dynamowebs" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

  <!-- Bootstrap Css -->
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="<?php echo base_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>
<div class="account-pages my-5 pt-sm-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
          <div class="bg-primary bg-soft">
            <div class="row">
              <div class="col-7">
                <div class="text-primary p-4">
                  <h5 class="text-primary">Welcome Back !</h5>
                  <p>Sign in to continue to Dynamowebs.</p>
                </div>
              </div>
              <div class="col-5 align-self-end">
                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="auth-logo">
              <a href="index.html" class="auth-logo-light">
                <div class="avatar-md profile-user-wid mb-4">
                  <span class="avatar-title rounded-circle bg-light">
                    <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                  </span>
                </div>
              </a>

              <a href="index.html" class="auth-logo-dark">
                <div class="avatar-md profile-user-wid mb-4">
                  <span class="avatar-title rounded-circle bg-light">
                    <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                  </span>
                </div>
              </a>
            </div>
            <div class="p-2">
              <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
                <p style="color: red"><?= $_SESSION['error'] ?></p>
              <?php
                unset($_SESSION['error']);
              } ?>
              <?php echo validation_errors(); ?>
              <form class="form-horizontal" action="<?php echo base_url('login') ?>" method="post">

                <div class="mb-3">
                  <label for="username" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter username">
                </div>

                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <div class="input-group auth-pass-inputgroup">
                    <input type="password" class="form-control" id="textpassword" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                    <button class="btn btn-light " type="button"><i class="mdi mdi-eye-outline" id="password-addon"></i></button>
                  </div>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-check">
                  <label class="form-check-label" for="remember-check">
                    Remember me
                  </label>
                </div>

                <div class="mt-3 d-grid">
                  <button class="btn btn-primary waves-effect waves-light" name="submit" value="login" type="submit">Log In</button>
                </div>

                <div class="mt-4 text-center">
                  <h5 class="font-size-14 mb-3">Sign in with</h5>

                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                        <i class="mdi mdi-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="mt-4 text-center">
                  <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                </div>
              </form>
            </div>

          </div>
        </div>
        <div class="mt-5 text-center">

          <div>
            <p>Don't have an account ? <a href="<?php echo base_url('register') ?>" class="fw-medium text-primary"> Signup now </a></p>
            <p>©
              <script>
                document.write(new Date().getFullYear())
                const togglePassword = document.querySelector('#password-addon');
                const password = document.querySelector('#textpassword');

                togglePassword.addEventListener('click', function(e) {
                  // toggle the type attribute
                  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                  password.setAttribute('type', type);
                  // toggle the eye slash icon
                  this.classList.toggle('fa-eye-slash');
                });
              </script>
              Dynamo. Crafted with <i class="mdi mdi-heart text-danger"></i> by Dynamowebs
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>