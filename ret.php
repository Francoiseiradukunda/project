<?php include("conn.php");?>

<?php include("session.php");?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="ret.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="def">
<nav class="navigator">
    <ul>
        <li class="fine"><a href="index.php" class="rep">Add</a></li>
    </ul>
</nav>
</div>
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
        if(isset($_GET['regno'])){

        $regno=$_GET['regno'];
        
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