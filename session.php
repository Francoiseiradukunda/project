<?php
session_start();
if(strlen($_SESSION['email']==0)){
    header('location:index.php');
}
?>
<a href="logout.php">Logout</a>
<?php
session_start();
echo "wellcome"."  ". $_SESSION['fname']."  ". $_SESSION['lname'];
?>