<?php
  session_start();
  if (!isset($_SESSION['LoggedIn']) || $_SESSION['LoggedIn'] != True)
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
    
    
  </head>
  <body>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead">
    <div class="inner">
      <h3 class="float-left"> Welcome <?php echo($_SESSION['FirstName']); ?>!</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="http://localhost/IA/HomePage.php#">My Classes</a>
        <a class="nav-link active" href="http://localhost/IA/NewClass.php">New Class</a>
      </nav>
    </div>
  </header>
  
  <form class="needs-validation" novalidate method="POST" action="AddClass.php">
  <div class="form-group">
    <label for="ClassName">Class Name</label>
    <input type="text" class="form-control" id="ClassName" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="GradeLevel">Grade/Year</label>
    <input type="text" class="form-control" id="GradeLevel" placeholder="Grade level">
  <button type="submit" class="btn btn-primary mt-4">Create Class</button> 
</form>
  
  
  
  
  <footer class="mastfoot mt-auto">
    <div class="inner text-center">
      <p>21st Century Learning & Design</p>
    </div>
  </footer>
</div>
</body>
</html>
