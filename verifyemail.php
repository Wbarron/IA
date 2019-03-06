<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Verify</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="verify.php" method="POST">
  <?php $email = $_GET['Email'];  
echo ("  <h1 class=\"h3 mb-4 font-weight-light\">A code has been sent to $email</h1>");?>
    
    <div class="mb-4">
  <label for="inputCode" class="sr-only">Verification Code</label>
  <input type="Code" id="inputCode" name='inputCode' class="form-control" placeholder="Enter code here" required autofocus>
  </div>
  
  <input type="hidden" name = "Email" value = "<?php echo($email); ?>">
  <input type="hidden" name = "UserNo" value = "<?php echo($_GET['UserNo']); ?>">
  
  <button class="btn btn-lg btn-success btn-block" type="submit">Verify</button>
  <div class="mb-3">
  <button type="button" class="btn btn-link">Didn't get it? Send it again.</button>
</form>
</body>
</html>

