<?php
$conn = mysqli_connect("localhost", "root", "", "tree");
if ($conn) {
  echo "connected";
} else {
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <form action="sefe1.php" method="POST">
      <label for="firstname" class="form-label">First name: </label>
      <input type="text" class="form-control" name="firstname">
      <br>
      <label for="lastname" class="form-label">Last name: </label>
      <input type="text" class="form-control" name="lastname">
      <br>
      <label for="email" class="form-label">email: </label>
      <input type="email" class="form-control" name="email">
      <br>
      <label for="password" class="form-label">password: </label>
      <input type="password" class="form-control" name="password">
      <br>
      <input type="submit" value="SUBMIT" class="btn btn-lg btn-info mt-2" name="" id="">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fnm = $_POST['firstname'];
      $lnm = $_POST['lastname'];
      $em = $_POST['email'];
      $pass = $_POST['password'];
      $sql = "INSERT INTO `neat`(`fname`,`lname`,`email`,`password`) VALUES('$fnm','$lnm','$em','$pass')";
      $validate = mysqli_query($conn, $sql);
    }
    ?>
    <?php
    if (isset($_GET['deleteid'])) {
      $did = $_GET['deleteid'];
      $query5 = "DELETE FROM neat WHERE `neat`.`id` = '{$did}'";
      $vali = mysqli_query($conn, $query5);
    }
    ?>
  </div>
  <div class="container">
    <?php
    $sql1 = "SELECT * FROM `neat`";
    $validate = mysqli_query($conn, $sql1);
    ?>
    <table class="table table-info" border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
          <th>EMAIL</th>
          <th>PASSWORD</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($validate)) {
          ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['lname'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><a href="sefe2.php?sid=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="sefe1.php?deleteid=<?php echo $row['id'] ?>">Delete</a></td>
          </tr>
          <?php
        } ?>
      </tbody>
    </table>
  </div>
</body>
</html>