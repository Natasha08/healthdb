<?php
	session_start();
	require 'login_tools.php';
	
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Warriors Pen</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href="http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="mainBody">
    <header id="top" class="main-header">
      <h1>For the Greek Warrior</h1>
      <img class="arrow" src="img/arrow.svg" alt="Down arrow">
    </header>
   
      <nav>
       <ul>
         <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
         <li><a href="login.php">Logout</a></li><em><?php print_r ($_SESSION['first_name']);?></em>
       </ul>
      </nav>
      <nav>
       <ul>
       <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
        <li><a href="input.php">Input</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="nutrition.php">Nutrition</a></li>
      </ul>
     </nav>
     
<?php

require 'require.php';
 
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
<?php }endwhile; 
mysqli_close($dbcon);

?>
  <input type="submit" name="Submit Calories"></input>
</form>


</body>

</html>
