<?php include("conn.php");?>
<?php
if(isset($_GET['regno'])){
    $regno=$_GET['regno'];
    $sel=mysqli_query($conn,"select * from studentlist where regno='$regno'");
    $row=mysqli_fetch_array($sel);
    $name=$row[0];
    $regno=$row[1];
    $gender=$row[2];
    $program=$row[3];
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
<div class="def">
<nav class="navigator">
    <ul>
        <li class="fine"><a href="index.php" class="rep">report</a></li>
    </ul>
</nav>
</div>
</div>
<form action="" method="POST">
    <fieldset>
    <legend class="leg1">add student member</legend>
    <form class="formm" method="POST">

    <div class="her">
<div><LAbel class="labeli seconds">Names:</LAbel> </div>
<div><input type="text" class="input2 seconds"  name="name" value="<?php echo $name; ?>" required> <br></div>
</div>

<div class="hey">
<div><label for="" class="labeli seconds">regno:</label> </div>
<div><input type="text" class="input2 seconds"  name="regno" value="<?php echo $regno; ?>" required>
<br></div>
</div>

<div class="hom">
<div><label for="" class="labeli seconds">program:</label></div>
<select name="program" class="input2 seconds">
    <option value="education" <?php if($program=="education") echo "selected"; ?>>Education program</option>
    <option value="BBA" <?php if($program=="BBA") echo "selected"; ?>>Business Administration</option>
    <option value="Art and Design" <?php if($program=="Art and Design") echo "selected"; ?>>Art And Design</option>
    <option value="Mass Communication" <?php if($program=="Mass Communication") echo "selected"; ?>>Mass Communication And Journalism</option>
</select>

</select> <br></div>
</div>

<div class="com">

<div><label for="" class="labeli seconds">gender:</label></div>
<select name="gender"  class="input0 seconds" value="<?php echo $gender; ?>">
    <option value="Female" name="gender">Female</option>
    <option value="Male" name="gender">Male</option>
</select>
<!-- <div><input type="radio" class="input0 seconds" name="gender" value="female"  required>Female 
<input type="radio" class="input0 seconds" name="gender" value="male" required>Male <br></div> -->

</div>
<div class="btn">
    <div ><button type="submit" value="Add" name="update"class="btn1">update</button></div>
<div><button type="reset" value="Cancel" name="cancel" class="btn2">Cancel</button></div>
</div>
    </form>
</fieldset>

<?php
if (isset($_POST['update'])){
    $names=$_POST['name'];
$regno=$_POST['regno'];
$gender=$_POST['gender'];
$program=$_POST['program'];

$update=mysqli_query($conn,"update studentlist set names='$names',
gender='$gender',program='$program' where regno='$regno' ");

if($update==true){
    echo("<p class='succ'> SUCCEFULLY STUEDENT ADDED </p>");
    header("location:ret.php");
}
else{
    echo("TRY AGAIN");
}

}

?>
    </body>
</html>

