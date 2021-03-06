<?php
	session_start();
	require 'login_tools.php';
	
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Warrior Pen</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href="http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css'">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="mainBody">
    <header id="top" class="main-header">
      <h1>For the Greek Warrior</h1>
      <img class="arrow" src="img/arrow.svg" alt="Down arrow">
    </header>
    <div class="primary-content t-border">
      <nav>
       <ul>
         <li><a href="login.php">Logout</a></li><em><?php print_r ($_SESSION['first_name']);?></em>
       </ul>
      </nav>
      <nav>
       <ul>
        <li><a href="input.php">Input</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="nutrition_database.php">Nutrition</a></li>
      </ul>
      </nav>

<?php

require 'require.php';    

    
$food_name= $_POST['food_name'];
$food_brand= $_POST['food_brand'];
$serving_amount= $_POST['serving_amount'];
$s_unit= $_POST['s_unit'];
$serving_size= $_POST['serving_size'];
$total_calories= $_POST['total_calories'];
$fat_grams= $_POST['fat_grams'];
$carbohydrate_grams= $_POST['carbohydrate_grams'];
$protein_grams= $_POST['protein_grams'];
$total_grams= $_POST['total_grams'];
$fat_ratio= $_POST['fat_ratio'];
$carbohydrate_ratio= $_POST['carbohydrate_ratio'];
$protein_ratio= $_POST['protein_ratio'];


$fdata = "INSERT INTO otstudyc_nwork.nutrition (food_name, food_brand, serving_amount, s_unit, serving_size, total_calories, fat_grams, carbohydrate_grams, protein_grams, total_grams, fat_ratio, carbohydrate_ratio, protein_ratio) VALUES ('$food_name', '$food_brand', '$serving_amount', '$s_unit','$serving_size', '$total_calories', '$fat_grams', '$carbohydrate_grams', '$protein_grams', '$total_grams', '$fat_ratio', '$carbohydrate_ratio', '$protein_ratio')"; 

if (mysqli_query($dbcon, $fdata)) {

    echo "<br><br<br>Your new food has been saved!";
     
} else {
    
    die("Error submitting form.");
}

  
mysqli_close($dbcon); 

?>
</div>
  <div class="main-footer">
      <footer>
       <a href="http://twitter.com/natasha_marie_o"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        <a href="http://facebook.com/greek_esposa"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
        <p>&copy; 2015-2016 Natasha Osborne.</p>
        <li><a href="privacy.html">Privacy Policy</a></li>
      </footer>
  </div>
</body>
</html>
