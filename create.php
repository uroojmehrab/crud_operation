<?php
$conn=mysqli_connect("localhost","root","","tree");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>create</title>
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
      
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
     
    </form>
  </div>
</nav>
    </div>
    <!-- form -->
    <div class="container-fluid">
    <form action="create.php" method="POST">
    <!-- <label for="id" class="form-label">Student ID: </label>
    <input type="text" class="form-control" name="ID"  >
    <br>     -->
    <label for="firstname" class="form-label">First name: </label>
    <input type="text" class="form-control" name="firstname" >
    <br>
    <label for="lastname" class="form-label">Last name: </label>
    <input type="text" class="form-control" name="lastname" >
    <br>
    <label for="age" class="form-label">Age: </label>
    <input type="text" class="form-control" name="age" >
    
    <br>
    <input type="submit" value="SUBMIT" class="btn btn-lg btn-info mt-2" name="" id="">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$iid=$_POST['id'];    
$fnm=$_POST['firstname'];
$lnm=$_POST['lastname'];
$age=$_POST['age'];
$all="INSERT INTO `final`(`fname`,`lname`,`age`)VALUES('$fnm','$lnm','$age')";
$validate=mysqli_query($conn,$all);
}
?>
    </div>
    <!-- TABLE -->
    <div class="container">
        <?php
        $sql="SELECT * FROM `final`";
        $result=mysqli_query($conn,$sql);
        ?>
        <table class="table table-warning" border="1">
<thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
    </tr>
</thead>
<tbody>
    <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['fname']?></td>
        <td><?php echo $row['lname']?></td>
        <td><?php echo $row['age']?></td>
        <!-- <th><a href="display.php?Sid=<?php echo $row['id']?>">Edit</a></th>
        <th></th> -->
    </tr>
    <?php
    }
    ?>
</tbody>
        </table>
    </div>
</body>
</html>
