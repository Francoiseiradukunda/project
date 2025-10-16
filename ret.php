<?php include("conn.php");?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="ret.css">
    </head>
    <body>
        <h3 align="center" class="about">LIST OF STUDENT</h3>
        <table class="tbl" border="2">
<tr>
    <td>NAMES</td>
    <td>REGISTRATION NUMBER</td>
     <td>GENDER</td>
     <td>PROGRAM</td>
     <td>Update</td>
      <td>Delete</td>
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
 
<td>
    <a class='update' href='ret.php?regno=".$row['regno']."'>Update</a>
</td>
<td>
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