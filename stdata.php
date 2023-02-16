<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$countryCode=$_POST['countryCode'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$con =@mysqli_connect('localhost','root','','stdata');
$query = "insert into sttable values('$firstname','$middlename','$lastname','$gender','$countryCode','$phone','$address','$email','$pass','$repass')";
$result = mysqli_query($con, $query);

if($result){
   echo "data insert into DataBase Successfully";
}
else{
    echo "OOps Something went wrong please check and re enter";
}
?>
<html>
    <body style="background-image: url('loginbg1.jpg');width: 100% ;">
        
         <img align="left" src="logo1.png" width="250" height="300">
        <img align="left" src="logo1.png" width="250" height="300">
    
        <img align="right" src="logo1.png" width="250" height="300">
        <img align="right" src="logo1.png" width="250" height="300">
    <center>
        <?php 
        if($result==1){
            ?>
        <h1 style="color:orange">Hi Nice to See you below are the credentials</h1>
        <h2 style="color:red">your user id:</h2><?php echo $email;?>
        <h2 style="color:red">your password is:</h2><?php echo $pass;?>
        }
       <?php
        }
        ?>
    </center>
    
        
    </body>
    
    
    
</html>
