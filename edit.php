<?php 
    include("conn.php");


    $sqli= "SELECT * FROM tbmember where mem_id ='".$_GET['id']."'";
   
    $result = mysqli_query($conn,$sqli);
    $row = mysqli_fetch_assoc($result);

    if(isset($_GET['btn_update'])){   //when click update button
        
        $mem_id     = $_GET['mem_id'];
        $fname      = $_GET['fname'];
        $lname      = $_GET['lname'];
        $username    = $_GET['username']; // assign value from form into var
        $password   = $_GET['password'];
        $email      = $_GET['email'];
        $tel        = $_GET['tel'];
        $address    = $_GET['address'];

        $update = "UPDATE tbmember SET mem_id='$mem_id',fname='$fname', lname='$lname', 
        username='$username',password='$password', email='$email',
        tel='$tel', address='$address' WHERE mem_id ='".$_GET['mem_id']."'";


               
        $up = mysqli_query($conn, $update);
      

        if ($up) {
            mysqli_close($conn); //close connection
            header("location:member.php");

            exit;
        }
        else {
            echo mysqli_error();
        }

    }

    
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
    button{
        width: 100px;
        height: 30px;
        background-color:  rgb(217, 243, 201);
        border-radius: 10px;
        font-size: 16px;
        color: black;
    }


    input{
        width: 150px;
        background-color:#FFF0F5;
        color:black;
    }

    body{
        margin-top: 5%;
        background-image: url("https://powerpointboy.com/wp-content/uploads/2019/02/mail-sub-bg.png");
        background-color: #cccccc;
    }

    h2{
        color: Green;
    }
    

</style>
<center>
        <h2>Edit Membership</h2>

        <br><br>

        <form method="GET">
            <table border="0">
               
                <tr>
                    <td>ID </td>
                    <td>
                        <input type="text" name="mem_id" value="<?php echo $row['mem_id']?>">
                    </td>
                </tr>
                <tr>
                    <td>First name </td>
                    <td>
                        <input type="text" name="fname" value="<?php echo $row['fname']?>">
                    </td>
                </tr> 
                <tr>
                    <td>L3ast name </td>
                    <td>
                        <input type="text" name="lname" value="<?php echo $row['lname']?>">
                    </td>
                </tr>     
                <tr>
                    <td>Username </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $row['username']?>">
                    </td>
                </tr>    
                <tr>
                    <td>Password </td>
                    <td>
                        <input type="text" name="password" value="<?php echo $row['password']?>">
                    </td>
                </tr>
                <tr>
                    <td>E-mail </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $row['email']?>">
                    </td>
                </tr> 
                <tr>
                    <td>Telephone </td>
                    <td>
                        <input type="text" name="tel" value="<?php echo $row['tel']?>">
                    </td>
                </tr> 
                <tr>
                    <td>Address </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $row['address']?>">
                    </td>
                </tr> 
                <tr>
                  
                </tr>  
                <tr>
                    <td><br><br></td>
                </tr> 
                <tr colspan="1">
                    <td><br><br></td>
                    <td>
                        <input type ="submit" name="btn_update" value ="Update">&nbsp;&nbsp;&nbsp;&nbsp;
                        
                    </td>
                    
                </tr>
            </table>
        </form>
       
        <br><br>
    
    <button onclick="document.location='member.php'">&nbsp<span class="glyphicon glyphicon-home" ></span> &nbsp </button>
    
   
    </center>

    </html>

