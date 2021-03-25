<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Data</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    button{
        width: 150px;
        height: 30px;
        background-color:  rgb(217, 243, 201);
        border-radius: 10px;
        font-size: 16px;
        color: black;
    }

    button.add{
        width: 200px;
        background-color: #FFB6C1;
    }

    button.search {
        width: 50px;
        background-color: #AFEEEE;
    }

    input{
        width: 250px;
        background-color: #F0FFFF;
    }

    body{
        margin-top: 15%;
        background-image: url("https://powerpointboy.com/wp-content/uploads/2019/02/mail-sub-bg.png");
        background-color: #cccccc;
    }

    h1{
        color: Green;
    }

    table{
        width: 60%;
    
    }
    

</style>

<center>
<body>
    <h1>Membership Database Management</h1><br>
   
    <?php
        $strKeyword = null;

        //เป็น ฟังก์ชัน ตรวจสอบว่า ถ้ามี Method get เข้ามา จะเชคว่า ข้อมูลมารึ ยัง
        if(isset($_GET["_txtKeyword"])){
            $strKeyword = $_GET["_txtKeyword"];
        }
    ?>
    <table class="table-striped">
        <tr>
           
            <button class="add" onclick="document.location='add.html'">Add New Member</button>
                <form method="get" name="fsearch">
                                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                                
                        <input type="text" name="_txtKeyword" value="<?php echo $strKeyword; ?>" > &nbsp;&nbsp
                        <button class="search" type="submit" > <span class = "glyphicon glyphicon-search" ></span></button>
                
                </form>
        </tr>
    </table> <br><br>         
  
              
   

    <?php
        include("conn.php");
        //SELECT + search by strname (fname)
        $sqli="SELECT * FROM tbmember WHERE fname like '".$strKeyword."%'";
        $result = mysqli_query($conn,$sqli);

       
    ?>

    <table border="1" class="table-striped" >
    
        <tr>
            <th><center>id</center></th>
            <th><center>First Name</center></th>
            <th><center>Last Name</center></th>
            <th><center>Username</center></th>
            <th><center>Detail</center></th>
            <th><center>Edit</center></th>
            <th><center>Delete</center></th>
        </tr> 
        
        <?php
            while($row=mysqli_fetch_assoc($result)){
                $idn=$row["mem_id"];
                  
        ?>

        <tr>
            <td><center><?php echo $row["mem_id"];?></center></td>
            <td><center><?php echo $row["fname"];?></center></td>
            <td><center><?php echo $row["lname"];?></center></td>
            <td><center><?php echo $row["username"];?></center></td>
            <td><center>
               
               <?php echo " <a href='detail.php?id=$idn'>Detail</a>";?></center>
            </td>
            <td><center>
               
                <?php echo "<a href='edit.php?id=$idn'>Edit</a>";?></center>
            </td>
            <td><center>
               
                <?php echo "<a href='del.php?id=$idn'>Delete</a>";?></center>
            </td>
        </tr>
    <?php
        }
    ?> 
    </table>

    <hr>
   
        <button onclick="document.location='logout.php'">Logout</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
        <button type="button" id=print onclick="window.print();">&nbsp<span class="glyphicon glyphicon-print" ></span> &nbsp </button>

</body>
</center>
</html>