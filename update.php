<?php include("conn.php");?>
<?php
// ✅ Always connect to the database first


// ✅ Initialize variables to avoid undefined errors
$name = "";
$regno = "";
$gender = "";
$program = "";

// ✅ When the page is loaded with ?regno= in the URL
if (isset($_GET['regno'])) {
    $regno = $_GET['regno'];
    $sel = mysqli_query($conn, "SELECT * FROM studentlist WHERE regno='$regno'");

    if ($sel && mysqli_num_rows($sel) > 0) {
        $row = mysqli_fetch_assoc($sel);
        $name = $row['names'];
        $gender = $row['gender'];
        $program = $row['program'];
    } else {
        echo "<p style='color:red;'>No student found with that registration number.</p>";
    }
}

// ✅ When the form is submitted
// if (isset($_POST['update'])) {
//     $name = $_POST['name'];
//     $regno = $_POST['regno'];
//     $gender = $_POST['gender'];
//     $program = $_POST['program'];

//     $update = mysqli_query($conn, "UPDATE studentlist SET 
//         names='$name',
//         gender='$gender',
//         program='$program'
//         WHERE regno='$regno'");

//     if ($update) {
//         echo "<p class='succ'>✅ Student record updated successfully!</p>";
//         echo "<script>window.location='ret.php';</script>"; // ✅ JavaScript redirect
//     } else {
//         echo "<p style='color:red;'>❌ Update failed. Please try again.</p>";
//     }
// }
// ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="def">
    <nav class="navigator">
        <ul>
            <li class="fine"><a href="index.php" class="rep">Report</a></li>
        </ul>
    </nav>
</div>

<form method="POST" class="">
    <fieldset>
        <legend class="leg1">Update Student Member</legend>

        <!-- Name Field -->
        <div class="her">
            <label class="labeli seconds">Names:</label>
            <input type="text" class="input2 seconds" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br>
        </div>

        <!-- RegNo Field -->
        <div class="hey">
            <label class="labeli seconds">Reg No:</label>
            <input type="text" class="input2 seconds" name="regno" value="<?php echo htmlspecialchars($regno); ?>" readonly><br>
        </div>

        <!-- Program Field -->
        <div class="hom">
            <label class="labeli seconds">Program:</label>
            <select name="program" class="input2 seconds" required>
                <option value="education" <?php if ($program=="education") echo "selected"; ?>>Education Program</option>
                <option value="BBA" <?php if ($program=="BBA") echo "selected"; ?>>Business Administration</option>
                <option value="Art and Design" <?php if ($program=="Art and Design") echo "selected"; ?>>Art and Design</option>
                <option value="Mass Communication" <?php if ($program=="Mass Communication") echo "selected"; ?>>Mass Communication and Journalism</option>
            </select><br>
        </div>

        <!-- Gender Field -->
        <div class="com">
            <label class="labeli seconds">Gender:</label>
            <select name="gender" class="input0 seconds" required>
                <option value="Female" <?php if ($gender=="Female") echo "selected"; ?>>Female</option>
                <option value="Male" <?php if ($gender=="Male") echo "selected"; ?>>Male</option>
            </select><br>
        </div>

        <!-- Buttons -->
        <div class="btn">
            <button type="submit" name="update" class="btn1">Update</button>
            <button type="reset" class="btn2">Cancel</button>
        </div>
    </fieldset>
</form>

</body>
</html>


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

