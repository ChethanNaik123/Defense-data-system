<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Welcome to INDIAN DEFENCE..!</title>
</head>

<body class="m-1 p-2">
  <h1>Jai Hindh...!</h1>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.html">About</a>
          </li>
        </ul>
 <div class="d-flex justify-content-center h-100">
</div>
    <div class="card">
        <div class="card-header">
            <h3>Sign In</h3>
            <div class="d-flex justify-content-end social_icon">
                <span><i class="fab fa-facebook-square"></i></span>
                <span><i class="fab fa-google-plus-square"></i></span>
                <span><i class="fab fa-twitter-square"></i></span>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="username" name="username">
                    
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="password" name="password">
                </div>
                <div class="row align-items-center remember">
                    <input type="checkbox">Remember Me
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn float-right login_btn">login</a>
                </div>
            </form>
        </div>
        <?php
  $db = mysqli_connect('localhost','root','','defence',);
  session_start();
  if(isset($_POST['submit'])){
  $username=$_POST["username"];
  $password=$_POST["password"];
  $stmt=$db->prepare("SELECT * FROM login where username=? and password=?");
  $stmt->bind_param("ss",$username,$password);
  $stmt->execute();
  $stmt_result=$stmt->get_result();
  if($stmt_result->num_rows>0){
    $data=$stmt_result->fetch_assoc();
    if($data['password']==$password)
    {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header('Location: index.php');
    }
    else
    {
      echo "Incorrect password";
    }
  }
  else{
    echo "user not found";
  }
}
  $db->close();
?>