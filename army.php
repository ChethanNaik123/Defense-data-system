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
    <h1>!!ARMY STRONG!!</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                </ul>
                <li class="nav-item">
                </li>
                <form class="d-flex">
                </form>
            </div>
        </div>
    </nav>
    <div>
<br>
<br>
   <?php 
   session_start();
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
       echo '<p class="text-center">FOR INSERTION:</p>
       <form action="" method="post" class="container">
       <div class="form-group" >
         <label for="exampleInputEmail1">Squad No</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="SQUAD_NO" aria-describedby="emailHelp" placeholder="Enter Squad number">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">Base</label>
         <input type="text" class="form-control" name="BASE" id="exampleInputPassword1" placeholder="enter base name">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">TRAINING</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="TRAINING" placeholder="add training centre">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">Accidents</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="ACCIDENTS" placeholder="describe the accidents">
       </div>
       <br>
       <button type="submit" name="submit"class="btn btn-primary">Submit</button>
     </form>
     <br>
       <p class="text-center">FOR DELETION:</p>
       <form action="" method="post" class="container">
          <div class="form-group" >
          <label for="exampleInputEmail1">Squad No</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="SQUAD_NO" aria-describedby="emailHelp" placeholder="Enter Squad number">
   </div>   
   <br>  
      <button type="delete" name="delete"class="btn btn-primary">Delete</button>
     </form>
    <br>';
   }

    ?> 

<?php
      $db=mysqli_connect("localhost","root","","defence");
      if($db==true){
        echo "connected";
      }
      if(isset($_POST['submit'])){
      $SQUAD_NO=$_POST["SQUAD_NO"];
      $BASE=$_POST["BASE"];
      $TRAINING=$_POST["TRAINING"];
      $ACCIDENTS=$_POST["ACCIDENTS"];
      $sql2="INSERT INTO army (SQUAD_NO, BASE, TRAINING, ACCIDENTS) VALUES
      ('$SQUAD_NO', '$BASE', '$TRAINING','$ACCIDENTS');";
    // print_r($sql2);
    $res1=mysqli_query($db, $sql2);
      if($res1){
      echo "Inserted!";
      }
      }
      if(isset($_POST['delete'])){
        echo "posted";
      $SQUAD_NO=$_POST["SQUAD_NO"];
      $sql="DELETE FROM army WHERE SQUAD_NO='$SQUAD_NO';";
      if(mysqli_query($db, $sql))
          echo "Deleted!";
        }
?>
<br>
</body>
</html>
<?php
$db->close();
?>

    <table class="table table-bordered table-hover">
			<tr>
				<th>SQUAD NO</th>
				<th>BASE</th>
				<th>TRAINING</th>
				<th>ACCIDENTS</th>			
				

			</tr>
    <?php
           require('connect.php');


$all="SELECT * FROM army";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
		echo "<td>".$row['SQUAD_NO']."</td>";
		echo "<td>".$row['BASE']."</td>";
		echo "<td>".$row['TRAINING']."</td>";
		echo "<td>".$row['ACCIDENTS']."</td>";
	   
    }
} else {
    echo "0 results";
}



?>
</table>
    </div>    
    <a href="./index.php" class="px-2">BACK</a>
    </body>
    </html>