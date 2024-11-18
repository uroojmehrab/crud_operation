<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clean3</title>
</head>
<body>
    <?php
    $uid=$_POST['ID'];
    $ufnm=$_POST['firstname'];
    $ulnm=$_POST['lastname'];
    $uem=$_POST['email'];
    $upass=$_POST['password'];
    echo $ulnm;
    $conn=mysqli_connect("localhost","root","","tree");
    $que4="UPDATE `neat` SET `fname` = '{$ufnm}',`lname` = '{$ulnm}',`email` = '{$uem}' ,`password` = '{$upass}' WHERE `neat`.`id` = '{$uid}';";
    $valid=mysqli_query($conn,$que4);
    header("location:sefe1.php");
    ?>
</body>
</html>