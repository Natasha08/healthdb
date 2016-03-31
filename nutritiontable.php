<html>
  <head>
    <meta charset="utf-8">
    <title>Kinobuild</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href='http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="mainBody">
    <header id="top" class="main-header">
      <h1 class="subhead">For the Greek Warrior</h1>
      <img class="arrow" src="img/arrow.svg" alt="Down arrow">
    </header>
   
      <nav>
       <ul>
         <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
         <li><a href="index.html">Logout</a></li>
       </ul>
      </nav>
      <nav>
       <ul>
       <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
        <li><a href="input.htm">Input</a></li>
        <li><a href="reports.htm">Reports</a></li>
        <li><a href="nutrition.htm">Nutrition</a></li>
      </ul>
     </nav>
     
<?php

require '../connect_db.php';

// Check connection
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected". "<br>". "<br>";
}

 
   $sql= "SELECT * FROM otstudyc_nwork.nutrition";
   
  $result = mysqli_query($dbcon, $sql); 
  While ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)): {
 
 ?>

<br><br><br>
<form action="n_input.php", method="post"> 
<tr class="nrow">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="n_box"><?php echo $rows['food_name']; ?></label>&nbsp;&nbsp;&nbsp;  
  <input type="checkbox" value="<?php echo $rows['food_name']; ?>"></input>
</tr>
</table>
<?php }endwhile; ?>
  <input type="submit" name="Submit Calories"></input>
</form>


</body>

</html>
