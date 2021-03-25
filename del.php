<?php
    include("conn.php");

    $idx = $_GET["id"];

$sqli= "DELETE FROM tbmember where mem_id ='".$idx."'";

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