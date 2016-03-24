<html>
  <head>
    <meta charset="utf-8">
    <title>Kinobuild</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href='http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
  </head>
<?php
 
 if ( $_POST)
{

require '../connect_db.php';

if (!$dbcon) {
     die('Connection Failed');
} else {
     echo "<br><br><br>Great Job!<br>";
 } 
?>  
 <table class="table">
 <tr class="table_title">  
   <th> Food Name</th>
   <th>Fat</th>
   <th>Carbs</th>
   <th>Protein</th>
 </tr>
<?php 

$food_name= $_POST[<?php echo $rows[food_name]; ?>'];

$sql ="SELECT * FROM `nutrition` WHERE `food_name` LIKE "$food_name";";

$result = mysqli_query($dbcon, $sql); 
  While ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)):?> 
  
<tr class="t_column"> 
  <td><?php echo $rows['fat_grams']; ?></td>
  <td><?php echo $rows['carbohydrate_grams']; ?></td> 
  <td><?php echo $rows['protein_grams']; ?></td>
</tr>


<?php endwhile; ?> 

 </table> 
  
mysqli_close($dbcon); 

 }

?>    