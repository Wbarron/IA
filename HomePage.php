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
        <a class="nav-link active" href="http://localhost/IA/HomePage.php#">My Classes</a>
        <a class="nav-link" href="http://localhost/IA/NewClass.php">New Class</a>
      </nav>
    </div>
  </header>
  
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Mathmatics <span class="badge badge-light">Grade 10</span>
        </button>
        <button type="button" class="btn btn-outline-danger float-right btn-sm">Delete</button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <ul class="list-group list-group-flush">
          <li class="list-group-item"> <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal"> Trigonemtry: <span class="badge badge-light">short description of unit</span> </button></li> 
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Trigonemtry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span> 
                </button>
              </div>
            <div class="modal-body">
              <ul class="list-group">
                <li class="list-group-item list-group-item-dark">Overview <a class="badge badge-light" data-toggle="collapse" href="#collapseExample0" role="button" aria-expanded="false" aria-controls="collapseExample0">expand</a>
                <div class="collapse" id="collapseExample0">
                  <div class="card card-body">
                    <img src="..." class="img-fluid" alt="Responsive image"> 
                  </div>
                </div>
                </li>
                <li class="list-group-item list-group-item-primary">Collaboration <a class="badge badge-light" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">1</a>
                <div class="collapse" id="collapseExample1">
                  <div class="card card-body">
                  Students are not required to work in pairs or groups
                  </div>
                </div>
                </li>
                <li class="list-group-item list-group-item-warning">Skilled Communication <a class="badge badge-light" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">4</a>
                <div class="collapse" id="collapseExample2">
                  <div class="card card-body">
                  Descriptor from the rubic
                  </div>
                </div>
                </li>
                <li class="list-group-item list-group-item-success">Knowledge Construction <a class="badge badge-light" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">3</a>
                <div class="collapse" id="collapseExample3">
                  <div class="card card-body">
                  Descriptor from the rubric
                  </div>
                </div>
                </li>
                <li class="list-group-item list-group-item-dark">Self Regulation <a class="badge badge-light" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">5</a>
                <div class="collapse" id="collapseExample4">
                  <div class="card card-body">
                  Descriptor from the rubric
                  </div>
                </div>
                </li>
                <li class="list-group-item list-group-item-danger">Real-World Problem Solving <a class="badge badge-light" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">2</a>
                <div class="collapse" id="collapseExample5">
                  <div class="card card-body">
                  Descriptor from the rubric
                  </div>
                </div>
                </li>
                <li class="list-group-item list-group-item-info">Use Of ICT Learning <a class="badge badge-light" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">3</a>
                <div class="collapse" id="collapseExample6">
                  <div class="card card-body">
                  Descriptor from the rubric
                  </div>
                </div>
                </li>
               </ul> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Copy all</button>
              <button type="button" class="btn btn-outline-danger">Delete all</button>
            </div>
          </div>
        </div>
      </div>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
    </div>
  </div> 
  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
      <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Economcics <span class="badge badge-light">Grade 11</span>
        </button>
        <button type="button" class="btn btn-outline-danger float-right btn-sm">Delete</button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            History <span class="badge badge-light">Grade 9</span>
        </button>
        <button type="button" class="btn btn-outline-danger float-right btn-sm">Delete</button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
  
  



  <footer class="mastfoot mt-auto float-down">
    <div class="inner text-center">
      <p>21st Century Learning & Design</p>
    </div>
  </footer>
</div>
</body>
</html>

