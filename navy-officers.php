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
    <h1>Welcome, Defence!</h1>
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
         <label for="exampleInputEmail1">UNIT_NO</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="UNIT_NO" aria-describedby="emailHelp" placeholder="Enter Unit_no">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">ID_NO</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="ID_N0" placeholder="add id_no">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">NAME</label>
         <input type="text" class="form-control" name="NAME" id="exampleInputPassword1" placeholder="enter name">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword"1>DOB</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="DOB" placeholder="enter date of birth">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">GENDER</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="GENDER" placeholder="enter gender">
       </div>
       <br>
       <div class="form-group">
       <label for="exampleInputPassword1">RANK</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="RANK" placeholder="enter rank">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">REWARDS</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="REWARDS" placeholder="enter rewards">
       </div>
       <br>
       <div class="form-group">
       <label for="exampleInputPassword1">STATUS</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="STATUS" placeholder="enter status">
       </div>
       <br>
       <button type="submit" name="submit"class="btn btn-primary">Submit</button>
     </form>
     <br>
       <p class="text-center">FOR DELETION:</p>
       <form action="" method="post" class="container">
          <div class="form-group" >
          <label for="exampleInputEmail1">Id No</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="ID_NO" aria-describedby="emailHelp" placeholder="Enter ID number">
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
      $UNIT_NO=$_POST["UNIT_NO"];
      $ID_NO=$_POST["ID_N0"];
      $NAME=$_POST["NAME"];
      $DOB=$_POST["DOB"];
      $GENDER=$_POST["GENDER"];
      $RANK=$_POST["RANK"];
      $REWARDS=$_POST["REWARDS"];
      $STATUS=$_POST["STATUS"];
      $sql2="INSERT INTO navy_officers VALUES
      ('$UNIT_NO', '$ID_NO', '$NAME','$DOB', '$GENDER', '$RANK', '$REWARDS', '$STATUS');";
    // print_r($sql2);
    $res1=mysqli_query($db, $sql2);
      if($res1){
      echo "Inserted!";
      }
      }
      if(isset($_POST['delete'])){
        echo "posted";
        $ID_NO=$_POST["ID_NO"];
      $sql="DELETE FROM navy_officers WHERE ID_NO='$ID_NO';";
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
				<th>UNIT NO></th>
				<th>ID_NO</th>
				<th>NAME</th>
                <th>DOB</th>
                <th>GENDER</th> 
                <th>RANK</th>
                <th>REWARDS</th>
                <th>STAUTS</th>			
				

			</tr>
    <?php
           require('connect.php');


$all="SELECT * FROM navy_officers";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
		echo "<td>".$row['UNIT_NO']."</td>";
		echo "<td>".$row['ID_NO']."</td>";
		echo "<td>".$row['NAME']."</td>";
		echo "<td>".$row['DOB']."</td>";
        echo "<td>".$row['GENDER']."</td>";
        echo "<td>".$row['RANK']."</td>";
        echo "<td>".$row['REWARDS']."</td>";
        echo "<td>".$row['STATUS']."</td>";
        
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