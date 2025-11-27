<?php include("conn.php");?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="ret.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="def">
            <?php
session_start();
if(strlen($_SESSION['email'])==0){
    header("location:login.php");
}
?>

<?php
echo "welcome"." ". $_SESSION['fname']." ".$_SESSION['lname'];
?><a href="logout.php" class="logoutt">logout</a>
<nav class="navigator">
    <ul>
        <li class="fine"><a href="index.php" class="rep">Add</a></li>
    </ul>
</nav>
</div>

<form action="" method="GET">
<input type="text" name="regno" placeholder="search">
<button type="submit" name="send">search</button>
</form>
<?php
$search="";
if(isset($_GET['send'])){
    $regno=$_GET['regno'];

    if(!empty($regno)){
           $search="SELECT * FROM studentlist WHERE regno LIKE '%$regno%'";
    }
    else{
        $search="SELECT * FROM studentlist";
    }
 
}
else{
    $search="SELECT * FROM studentlist";
}
$res=$conn->query($search);
?>

</div>
        <h3 align="center" class="about">LIST OF STUDENT</h3>
        <table class="tbl" border="2">
<tr>
    <td class="hope">NAMES</td>
    <td class="hope">REG NUMBER</td>
     <td class="hope">GENDER</td>
     <td class="hope">PROGRAM</td>
     <td class="hope">UPDATE</td>
      <td class="hope">DELETE</td>
</tr>
<?php
$read="select * from studentlist";
$res=$conn->query($read);
while($row=$res->fetch_assoc()){
 echo "<tr>
 
 <td>".$row['names']."</td>
 <td>".$row['regno']."</td>
 <td>".$row['gender']."</td>
 <td>".$row['program']."</td>
 
<td class='laser'>
    <a class='update' href='update.php?regno=".$row['regno']."'>Update</a>
</td>
<td class='laserr'>
    <a class='delete' href='ret.php?regno=".$row['regno']."'>Delete</a>
</td>

 </tr>";
}
?>
       

        <?php 
        if(isset($_GET['delete'])){

        $dele=$_GET['delete'];
        
              $del=mysqli_query($conn," DELETE FROM studentlist WHERE regno='$regno'"); 
              if($del==true){
                header ('location:ret.php');
              }
              else{
                echo('FAIL TO DELETE DATA');
              }
        }
     
        
        ?>

 </table>
    </body>
</html>