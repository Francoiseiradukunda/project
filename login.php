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
   <div class="hello"><h1 class="add">Login page</h1></div>
</div>
<div class="home-cont1">
<fieldset>
    <legend class="leg1">fill here</legend>


    <form class="formm" method="GET">

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
    <div ><button type="submit" value="Add" name="send" class="btn1">Login</button></div>
<div><button type="reset" value="Cancel" name="cancel" class="btn2">Cancel</button></div>
</div>
    </form>
</fieldset>
</div>

<?php
if(isset($_GET['id'])){
$id=$GET['id']
$email=$_GET['email'];
$pwd=$_GET['pwd'];
$cpwd=$_GET['cpwd'];

if($pwd!=$cpwd){
     echo "<p style='color:red; text-align:center;'>❌ Passwords do not match! Please try again.</p>";
}
else{
    $hashed= password_hash($pwd, PASSWORD_DEFAULT);
    $ins=mysqli_query($conn,"SELECT FROM reg $email,$pwd,$cpwd WHERE id='$id'
    );
    if($ins){
        header("location:ret.php");
    }
    else{
        echo "<p style='color:red; text-align:center;'>❌ Registration failed. Please try again.</p>";
    }
}

}

?>

</body>
</html>