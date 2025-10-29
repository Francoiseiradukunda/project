
<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      <link rel="stylesheet" type="text/css" href="reg.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
    
<div class="home-cont-reg">
    <div class="gre">
   <div class="hello"><h1 class="add">Login page</h1></div>
</div>
<div class="home-cont1">
<fieldset>
    <legend class="leg1">fill here</legend>


    <form class="formm" method="POST">

<div class="homm">
<div><label for="" class="labeli seconds">Email</label> </div>
<div><input type="email" class="input-seconds-address" placeholder="please enter your address" name="email" required>
<br></div>
</div>

<div class="homme">
<div><label for="" class="labeli seconds">Password</label> </div>
<div><input type="password" class="input2-seconds" placeholder="please enter your password" name="pwd" required>
<br></div>
</div>


<div class="btn">
    <div ><button type="submit" value="Add" name="send" class="btn1">Login</button></div>
<div><button type="reset" value="Cancel" name="cancel" class="btn2">Cancel</button></div>
</div>


<?php
session_start();

if(isset($_POST['send'])){
$email=$_POST['email'];
$pwd=$_POST['pwd'];
    $ins=mysqli_query($conn,"SELECT * FROM reg  WHERE email='$email' AND pwd='$pwd' ");
if(mysqli_num_rows($ins) > 0 ){
   $row=mysqli_fetch_assoc($ins);
   $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['pwd'];
     $_SESSION['fname']=$row['fname'];
      $_SESSION['lname']=$row['lname'];
        header("location:index.php");
    }
    else{
        echo "<p style='color:red; text-align:center;'>❌ Registration failed. Please try again.</p>";
    }
};
?>

    </form>
</fieldset> 

</div><p align="center" class="par">if you don't have account <a href="reg.php">Register</a></p></body>
</html>