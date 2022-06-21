
<head>

<meta charset="utf-8" />
<title>Login | Dynamowebs - Admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="dynamowebs" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico">

<!-- Bootstrap Css -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo base_url()?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
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
          <h5 class="text-primary">Free Register</h5>
          <p>Get your free dynamowebsaccount now.</p>
        </div>
      </div>
      <div class="col-5 align-self-end">
        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>
  <div class="card-body pt-0">
    <div>
      <a href="index.html">
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
      <form action="<?php echo base_url('register') ?>" method="post" id="register_form" class="needs-validation">


        <div class="mb-3">
          <label for="name" class="form-label">Name </label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter username" minlength="6" required>
          <div class="invalid-feedback">
            Please Enter Username
          </div>

          <div class="mb-3"><br>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" minlength="5">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class="invalid-feedback">
              Please Enter Email
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password </label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" minlength="6" required>
          <div class="invalid-feedback">
            Please Enter Password
          </div>
        </div>

        <div class="mt-4 d-grid">
          <button class="btn btn-primary waves-effect waves-light" id="submit" value="submit" name="submit" type="submit">Register</button>
        </div>

        <div class="mt-4 text-center">
          <h5 class="font-size-14 mb-3">Sign up using</h5>

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
          <p class="mb-0">By registering you agree to the dynamowebs<a href="#" class="text-primary">Terms of Use</a></p>
        </div>
      </form>
    </div>

  </div>
</div>
<div class="mt-5 text-center">

  <div>
    <p>Already have an account ? <a href="<?php echo base_url('login') ?>" class="fw-medium text-primary"> Login</a></p>
    <p>©

      Dynamo. Crafted with <i class="mdi mdi-heart text-danger"></i> by Dynamowebs
    </p>
  </div>
</div>

</div>
</div>
</div>
</div>
<?php require_once __DIR__ . '/../common/footer.php' ?>
<!-- <script>
$(document).ready(function() {
$("#register_form").validate();
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>"> -->

