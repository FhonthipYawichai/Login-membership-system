<?php
include ("conn.php");

$sqli= "SELECT mem_id,fname,lname,username,password,email,tel,address 
        FROM tbmember where mem_id ='".$_GET['id']."'";

$result = mysqli_query($conn,$sqli);

?>
<html>
    <head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    </head>

    <style>
        body{
            margin:5%;
            background-image: url("https://powerpointboy.com/wp-content/uploads/2019/02/mail-sub-bg.png");
            background-color: #cccccc;
        }
        table{
            width: 60%;
        }
       
        h1{
            color:green;
        }

        button{
        width: 50px;
        height: 30px;
        background-color:  rgb(217, 243, 201);
        border-radius: 10px;
        font-size: 16px;
        color: black;
    }
       
    </style>

<body>
<center>   
<h1>Detail Membership</h1> <br>
<center>
<table border="1" class="table-striped">
   
        <tr >
            <th><center>id </center></th>
            <th><center>First Name </center></th>
            <th><center>Last Name </center></th>
            <th><center>Username </center></th>
            <th><center>Password </center></th>
            <th><center>E-mail </center></th>
            <th><center>Telephone</center></th>
            <th><center>Address </center></th>
        </tr>
        
        <?php
            while($row=mysqli_fetch_assoc($result)){
                $idn=$row["mem_id"];
                  
        ?>
       
        <tr>
  
            <td><center><?php echo $row["mem_id"];?> </center></td>
            <td><center><?php echo $row["fname"];?> </center></td>
            <td><center><?php echo $row["lname"];?> </center></td>
            <td><center><?php echo $row["username"];?> </center></td>
            <td><center><?php echo $row["password"];?> </center></td>
            <td><center><?php echo $row["email"];?> </center></td>
            <td><center><?php echo $row["tel"];?> </center></td>
            <td><center><?php echo $row["address"];?> </center></td>
     
        </tr>
       
    <?php
        }
    ?> 
    </table>

    <hr>
   
    <button onclick="document.location='member.php'">&nbsp<span class="glyphicon glyphicon-home" ></span> &nbsp </button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
        <button type="button" id=print onclick="window.print();">&nbsp<span class="glyphicon glyphicon-print" ></span> &nbsp </button>

        
    </center>

</body>
</center>
</html>
