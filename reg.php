<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" type="text/css" href="reg.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
    
<div class="home-cont-reg">
    <div class="gre">
        
   <div class="hello"><h1 class="add">register form</h1></div>
</div>
<div class="home-cont1">
<fieldset>
    <legend class="leg1">fill here</legend>
    <form class="formm" method="POST">

    <div class="herr">
<div><LAbel class="labeli seconds">First name:</LAbel> </div>
<div><input type="text" class="input2-seconds" placeholder="enter first name" name="fname" required> 
</div>
</div>

<div class="heyy">
<div><label for="" class="labeli seconds">Last name:</label> </div>
<div><input type="text" class="input2-seconds" placeholder="please enter your last name" name="lname" required>
<br></div>
</div>

<div class="comm">
<div><label for="" class="labeli seconds">gender:</label></div>
<div class="sel">
<select name="gender"  class="input0-seconds">
    <option value="Female" name="gender" >Female</option>
    <option value="Male" name="gender" >Male</option>
</select></div></div>

<div class="homm">
<div><label for="" class="labeli seconds">Address</label> </div>
<div><input type="text" class="input-seconds-address" placeholder="please enter your address" name="address" required>
<br></div>
</div>

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

<div class="homn">
<div><label for="" class="labeli-secondss">confirm password</label> </div>
<div><input type="password" class="input2-seconds" placeholder="please re-write your password" name="cpwd" required>
<br></div>
</div>

<div class="btn">
    <div ><button type="submit" value="Add" name="send" class="btn1">register</button></div>
<div><button type="reset" value="Cancel" name="cancel" class="btn2">Cancel</button></div>
</div>
    </form>
</fieldset>
</div>

<?php
if(isset($_POST['send'])){
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

if($pwd!=$cpwd){
     echo "<p style='color:red; text-align:center;'>❌ Passwords do not match! Please try again.</p>";
}
else{
    $hashed= password_hash($pwd, PASSWORD_DEFAULT);
    $ins=mysqli_query($conn,"INSERT INTO reg(id,fname,lname,gender,addresss,email,pwd,cpwd) VALUES ('','$lname','$fname','$gender',
    '$address','$email','$pwd','$cpwd')");
    if($ins){
        header("location:login.php");
    }
    else{
        echo "<p style='color:red; text-align:center;'>❌ Registration failed. Please try again.</p>";
    }
}

}

?>
<p align="center" class="par">if you have account <a href="login.php">Login</a></p>
</body>
</html>