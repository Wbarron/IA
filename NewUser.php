<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sign Up</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
 <!-- Load Bootstrap Core -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-1" src="./21CL.png" alt="" width="162" height="162">
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Enter in your information</h4>
      
      <form class="needs-validation" novalidate method="POST" action="AddUser.php">
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
         
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="Title">Title</label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" name="Title" id="Title" placeholder="Title" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your title is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" name="email" id="email" placeholder="john.smith@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        
        <div class="mb-3">
          <label for="password">Password </label>
          <input type="password" class="form-control" name="password" id="password" placeholder="***********">
          <div class="invalid-feedback">
            Please enter a password.
          </div>
        </div>
        
        <!--
        <form>
  <div class="mb-5">
    <label for="exampleFormControlFile1">Upload photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
-->
  <div class="mb-3">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
      </form>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>

