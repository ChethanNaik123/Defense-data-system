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
    <h1>WARIORS ARE NOT BORN..THEY ARE MADE INDIAN DEFENCE!!</h1>
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
         <label for="exampleInputEmail1">Name</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="NAME" aria-describedby="emailHelp" placeholder="Enter Name">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">Force</label>
         <input type="text" class="form-control" name="FORCE" id="exampleInputPassword1" placeholder="enter Force name">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">Location</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="LOCATION" placeholder="add Location">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword"1>Course</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="COURSE" placeholder="enter course">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">Start Date</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="START_DATE" placeholder="enter date">
       </div>
       <br>
       <div class="form-group">
       <label for="exampleInputPassword1">End Date</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="END_DATE" placeholder="enter date">
       </div>
       <br>
       <div class="form-group">
         <label for="exampleInputPassword1">Duration</label>
         <input type="text" class="form-control" id="exampleInputPassword1" name="DURATION" placeholder="enter duration">
       </div>
       <br>
       <button type="submit" name="submit"class="btn btn-primary">Submit</button>
     </form>
     <br>
       <p class="text-center">FOR DELETION:</p>
       <form action="" method="post" class="container">
          <div class="form-group" >
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="NAME" aria-describedby="emailHelp" placeholder="Enter Name">
   </div>   
   <br>  
      <button type="delete" name="delete"class="btn btn-primary">Delete</button>
     </form>
    <br>
       <p class="text-center">TO COUNT TOTAL NUMBER OF TRAINING CENTRES</p>
       <form action="" method="post" class="container">
      <button type="count" name="count"class="btn btn-primary">Count</button>
     </form>
    <br>';
   }
    ?> 

<?php
      $db=mysqli_connect("localhost","root","","defence");
      if(isset($_POST['submit'])){
      $NAME=$_POST["NAME"];
      $FORCE=$_POST["FORCE"];
      $LOCATION=$_POST["LOCATION"];
      $COURSE=$_POST["COURSE"];
      $START_DATE=$_POST["START_DATE"];
      $END_DATE=$_POST["END_DATE"];
      $DURATION=$_POST["DURATION"];
      $sql2="INSERT INTO training VALUES
      ('$NAME', '$FORCE', '$LOCATION','$COURSE', '$START_DATE', '$END_DATE', '$DURATION');";
    // print_r($sql2);
    $res1=mysqli_query($db, $sql2);
      if($res1){
      echo "Inserted!";
     }
     }
     if(isset($_POST['delete'])){
      echo "posted";
      $NAME=$_POST["NAME"];
    $sql="DELETE FROM training WHERE NAME='$NAME';";
    if(mysqli_query($db, $sql))
        echo "Deleted!";
      }
      if(isset($_POST['count'])){
      $sql=mysqli_query($db, "CALL `COUNT_TCENTRES`()");
      $count=mysqli_fetch_array($sql);
      $count_training_centres=$count['Total'];
      echo $count_training_centres;
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
				<th>NAME</th>
				<th>FORCE</th>
				<th>LOCATION</th>
                <th>COURSE</th>		
                <th>START DATE</th>	
                <th>END DATE</th>
                <th>DURATION</th>		
				

			</tr>
    <?php
           require('connect.php');


$all="SELECT * FROM training";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
		echo "<td>".$row['NAME']."</td>";
		echo "<td>".$row['FORCE']."</td>";
		echo "<td>".$row['LOCATION']."</td>";
        echo "<td>".$row['COURSE']."</td>";
        echo "<td>".$row['START_DATE']."</td>";
        echo "<td>".$row['END_DATE']."</td>";
        echo "<td>".$row['DURATION']."</td>";
	 
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