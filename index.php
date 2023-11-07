<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Jai, hind!</title>
</head>

<body>
  <h1>!!!BHARAT RAKSHA!!!</h1>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.html">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Armed Forces
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./army.php">Army</a></li>
              <li><a class="dropdown-item" href="./navy.php">Navy</a></li>
              <li><a class="dropdown-item" href="./Air-force.php">Air-force</a></li>
              
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="./training.php">Trainings</a></li>
            </ul>
          </li>
        </ul>
        <li class="nav-item">
          <a class="nav-link" href="./contact.html">Contact us</a>
        </li>
      </div>
    </div>
    <?php
    session_start();

      echo ' <a type="button" class="btn btn-outline-success" href="./login.php">Log in</a>';
      echo '<a href="logout.php" class="btn btn-outline-success">Click here to log out</a>';
    
    ?>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.vifindia.org/sites/default/files/Indian_Defence_2_1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i.gadgets360cdn.com/large/indian_navy_twitter_full_1578044419347.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn6.aptoide.com/imgs/7/d/e/7def438f39b67cbd3a9438a18a814256_screen.jpg?h=500" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./armyofficers.php">Army Officers</a></li>
      <li class="breadcrumb-item"><a href="./navy-officers.php">Navy Officers</a></li>
      <li class="breadcrumb-item"><a href="./airforce-officers.php">Air-force Officers</a></li>
      
    </ol>
  </nav>
  <div class="card" style="width: 18rem;">
    <img src="https://cdn.nextgov.com/media/img/cd/2020/05/04/shutterstock_398557120/route-fifty-lead-image.jpg?1627426999" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SERVICE BEFORE SELF</h5>
      <p class="card-text">BRAVE men rejoice in adversity, just as brave soldiers triumph in war</p>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Jai Amar Jai Yodha</h5>
      <p class="card-text">The soldier is the army. No army is better than its soldier.</p>
    </div>
    <div class="card-footer text-muted">
      created by: !!Har Kaam Desh ke Naam!!
    </div>
  </div>
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2021–2022 Defence, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>