<html>
  <head>
    <meta charset="utf-8">
    <title>The Warrior's Pen</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href='http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="mainBody">
    <body class="mainBody">
    <header id="top" class="main-header">
      <h1>For the Greek Warrior</h1>
      <img class="arrow" src="img/arrow.svg" alt="Down arrow">
    </header>
    <div class="primary-content t-border">
      <nav>
       <ul>
         <li><a href="/index.html">Logout</a></li>
       </ul>
      </nav>
      <nav>
       <ul>
        <li><a href="/input.htm">Input</a></li>
        <li><a href="/reports.htm">Reports</a></li>
        <li><a href="/nutrition.htm">Nutrition</a></li>
      </ul>
      </nav>

<?php

require 'require.php';   

    
$date= $_POST['date'];
$workout_day= $_POST['workout_day'];
$key_lift1= $_POST['key_lift1'];
$weight1= $_POST['weight1'];
$weight2= $_POST['weight2'];
$weight3= $_POST['weight3'];
$reps1= $_POST['reps1'];
$reps2= $_POST['reps2'];
$reps3= $_POST['reps3'];
$key_lift2= $_POST['key_lift2'];
$weight4= $_POST['weight4'];
$weight5= $_POST['weight5'];
$weight6= $_POST['weight6'];
$reps4= $_POST['reps4'];
$reps5= $_POST['reps5'];
$reps6= $_POST['reps6'];
$secondary_Lift1= $_POST['secondary_lift1'];
$weight7= $_POST['weight7'];
$reps7= $_POST['reps7'];
$reps8= $_POST['reps8'];
$reps9= $_POST['reps9'];
$secondary_Lift2= $_POST['secondary_lift2'];
$weight8= $_POST['weight8'];
$reps10= $_POST['reps10'];
$reps11= $_POST['reps11'];
$reps12= $_POST['reps12'];

$result = "INSERT INTO greekgod.workout (date, workout_day, key_lift1, weight1, weight2, weight3, reps1, reps2, reps3, key_lift2, weight4, weight5, weight6, reps4, reps5, reps6, secondary_lift1, weight7, reps7, reps8, reps9, secondary_Lift2, weight8, reps10, reps11, reps12) VALUES ('$date', '$workout_day', '$key_lift1', '$weight1', '$weight2', '$weight3', '$reps1', '$reps2', '$reps3', '$key_lift2', '$weight4', '$weight5', '$weight6', '$reps4', '$reps5', '$reps6', '$secondary_Lift1', '$weight7', '$reps7', '$reps8', '$reps9', '$secondary_Lift2', '$weight8', '$reps10', '$reps11', '$reps12')"; 

if (mysqli_query($dbcon, $result)) {

    echo "<br><br<br>Your workout has been saved.";
     
} else {
    
    die("Error submitting form.");
}

  
mysqli_close($dbcon); 

 }

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
