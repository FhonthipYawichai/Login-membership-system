<?php
    include("conn.php");

    session_start();
    $_SESSION["auth"]=0;
  
    if (isset($_POST['btn_login'])){

      $usrname = $_POST['uname']; // assign value from form into var
      $passw = $_POST['password'];
      
  
      $sqli = "SELECT id, username, psd FROM tblogin WHERE username ='".$usrname."'"." AND psd = '".$passw."'";
      
 
  
      $result = mysqli_query($conn,$sqli);
  
         if (mysqli_num_rows($result)==1){
  
          $row = mysqli_fetch_assoc($result);
          echo $row['username'];
  
          $_SESSION["username_session"] = $row["username"];
          $_SESSION["auth"]=true;
          
          header("location: member.php");
  
          exit;
      }
      else {
          echo "<script>";
          echo  "aleart('Invalid Account!'')";
          echo "window.history.back()";
          echo "</script>";
      }
   
  }
    
  

  
 ?>

    <html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->
    </head>

    <style>
        body{
          
            background-image: url("https://powerpointboy.com/wp-content/uploads/2019/02/mail-sub-bg.png");
            background-color: #cccccc;
        }
        h2{
          color:Black;
        }
    </style>
    <body>
      
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
        <div class="fadeIn first">
           <h2>Member Login</h2>
        </div>
    
        <!-- Login Form -->
        <form method="post" >
          <input type="text"  id="uname" class="fadeIn second" name="uname" placeholder="username">
          <input type="text"  id = "password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" name="btn_login" value="Log In">
        </form>
    
        <!-- Remind Passowrd -->
        
    
      </div>
    </div>
    </body>
     </html>

     