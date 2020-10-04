<?php
session_start();
$con=mysqli_connect('localhost','root','','sparks_data');

$name1=$_SESSION['name'];
$q="select name from bank where not name='$name1'";
$result=mysqli_query($con,$q);

?>


<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="Assets/css/style.css">
    </head>
    <body>
    <div class="view">
        <h1>Choose name for credit transfer</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h2>Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="credit"></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>