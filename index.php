<?php include("session.php");?>
<html>
    <head>
        <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
<div class="home-re">
<div class="lin">
<div class="def">
<nav class="navigator">
    <ul>
        <li class="fine"><a href="ret.php" class="rep">report</a></li>
    </ul>
</nav>
</div>
</div>



<div class="home-cont">
    <div class="gre">
   <div class="hello"><h1 class="add">ADD NEW STUDENT</h1></div>
</div>
<div class="home-cont1">
<fieldset>
    <legend class="leg1">add student member</legend>
    <form class="formm" method="POST">

    <div class="her">
<div><LAbel class="labeli seconds">Names:</LAbel> </div>
<div><input type="text" class="input2 seconds" placeholder="enter full names" name="name" required> <br></div>
</div>

<div class="hey">
<div><label for="" class="labeli seconds">regno:</label> </div>
<div><input type="text" class="input2 seconds" placeholder="please enter your registration number" name="regno" required>
<br></div>
</div>

<div class="hom">
<div><label for="" class="labeli seconds">program:</label></div>
<div><select name="program" id="" class="input2 seconds">
    <option value="education" name="program">Education program</option>
    <option value="BBA" name="program">Business Administration</option>
    <option value="Art and Design" name="program">Art And Design</option>
    <option value="Mass Communication" name="program">Mass Communication And Journalism</option>
</select> <br></div>
</div>

<div class="com">

<div><label for="" class="labeli seconds">gender:</label></div>
<select name="gender"  class="input0 seconds">
    <option value="Female" name="gender">Female</option>
    <option value="Male" name="gender">Male</option>
</select>
<!-- <div><input type="radio" class="input0 seconds" name="gender" value="female"  required>Female 
<input type="radio" class="input0 seconds" name="gender" value="male" required>Male <br></div> -->

</div>
<div class="btn">
    <div ><button type="submit" value="Add" name="send"class="btn1">submit</button></div>
<div><button type="reset" value="Cancel" name="cancel" class="btn2">Cancel</button></div>
</div>
    </form>
</fieldset>
</div>


<?php
$servername="localhost";
$username="root";
$psswd="";
$database="eaur";//
$conn= new mysqli($servername,$username,$psswd,$database); 
if (isset($_POST['send'])){
    $names=$_POST['name'];
$regno=$_POST['regno'];
$gender=$_POST['gender'];
$program=$_POST['program'];

$ins=mysqli_query($conn,"insert into studentlist (names,regno,gender,program) values('$names','$regno','$gender','$program')");

if($ins==true){
    echo("<p class='succ'> SUCCEFULLY STUEDENT ADDED </p>");
}
else{
    echo("TRY AGAIN");
}

}

?>

</div>
</div>
    </body>
</html>