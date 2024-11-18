<?php
$conn=mysqli_connect("localhost","root","","tree");
if($conn){
    echo "connected";
}else{
    echo "not connected";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Clean1</title>
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
    <div class="container">
    <?php
    $get=$_GET['sid'];
    $sql4="SELECT * FROM `neat` WHERE id = '{$get}'";
    $valid=mysqli_query($conn,$sql4);
    while($row=mysqli_fetch_assoc($valid)){
    ?>
    <form action="sefe3.php" method="POST" class="post-form">
    <label for="id" class="form-label">Student ID: </label>
    <input type="hidden" class="form-control" name="ID" value="<?php echo $row['id']?>" >
    <br>    
    <label for="firstname" class="form-label">First name: </label>
    <input type="text" class="form-control" name="firstname" value="<?php echo $row['fname']?>" >
    <br>
    <label for="lastname" class="form-label">Last name: </label>
    <input type="text" class="form-control" name="lastname" value="<?php echo $row['lname']?>" >
    <br>
    <label for="email" class="form-label">email: </label>
    <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" >
    <br>
    <label for="password" class="form-label">password: </label>
    <input type="password" class="form-control" name="password" value="<?php echo $row['password']?>" >
    <br>
    <input type="submit" value="SUBMIT" class="btn btn-lg btn-info mt-2" name="" id="">
</form>
    <?php } ?> 
    </div>
</body>
</html>