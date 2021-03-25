<?php
    include ("conn.php");
 
$id = $_GET["mem_id"];

$sqli= "DELETE FROM tbmember where mem_id ='".$id."'";

$del = mysqli_query($conn,$sqli);

if ($del) {
    mysqli_close($conn); //close connection

    header("location:member.php");
    exit;
}
else {
    echo mysqli_error();
}
?>