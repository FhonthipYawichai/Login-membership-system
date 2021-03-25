<?php

include("conn.php");

$mem_id      =$_POST["mem_id"];
$fname       = $_POST["fname"];
$lname       = $_POST["lname"];
$username    = $_POST["username"]; // assign value from form into var
$password    = $_POST["password"];
$email       = $_POST["email"];
$tel         = $_POST["tel"];
$address     = $_POST["address"];

//add new record with insert command 
$sqli= "INSERT INTO tbmember (mem_id,fname,lname,username,password,email,tel,address) VALUES ('$mem_id','$fname','$lname','$username','$password','$email','$tel','$address')";
$add = mysqli_query($conn,$sqli);

if ($add) {
    mysqli_close($conn); //close connection
    header("location:add.html");
    exit;
}
else {
    echo mysqli_error();
}

?>
