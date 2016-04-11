<<<<<<< HEAD
<?php
	session_start();
	require 'login_tools.php';
	
?>
<!DOCTYPE html>
=======
>>>>>>> 27620d2e02544ceca6159927c73437832afcbf11
<html>
  <head>
    <meta charset="utf-8">
    <title>The Warrior Pen</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href='http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="mainBody">
<<<<<<< HEAD
=======
    <body class="mainBody">
>>>>>>> 27620d2e02544ceca6159927c73437832afcbf11
    <header id="top" class="main-header">
      <h1>For the Greek Warrior</h1>
      <img class="arrow" src="img/arrow.svg" alt="Down arrow">
    </header>
    <div class="primary-content t-border">
      <nav>
       <ul>
<<<<<<< HEAD
         <li><a href="login.php">Logout</a></li><em><?php print_r ($_SESSION['first_name']);?></em>
=======
         <li><a href="index.html">Logout</a></li>
>>>>>>> 27620d2e02544ceca6159927c73437832afcbf11
       </ul>
      </nav>
      <nav>
       <ul>
<<<<<<< HEAD
        <li><a href="input.php">Input</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="nutrition.php">Nutrition</a></li>
=======
        <li><a href="input.htm">Input</a></li>
        <li><a href="reports.htm">Reports</a></li>
        <li><a href="nutrition.htm">Nutrition</a></li>
>>>>>>> 27620d2e02544ceca6159927c73437832afcbf11
      </ul>
      </nav>

<?php
<<<<<<< HEAD
if ( $_POST)
{

require '../connect_db.php';

if (!$dbcon) {
     die('Connection Failed');
} else {
     echo "Great Job!";
 }
 
$date = $_POST['date'];
=======

require 'require.php';   

    
$date= $_POST['date'];
>>>>>>> 27620d2e02544ceca6159927c73437832afcbf11
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

<<<<<<< HEAD
$result = "INSERT INTO otstudyc_greekgod.workouts (date, workout_day, key_lift1, weight1, weight2, weight3, reps1, reps2, reps3, key_lift2, weight4, weight5, weight6, reps4, reps5, reps6, secondary_lift1, weight7, reps7, reps8, reps9, secondary_Lift2, weight8, reps10, reps11, reps12) VALUES ('$date', '$workout_day', '$key_lift1', '$weight1', '$weight2', '$weight3', '$reps1', '$reps2', '$reps3', '$key_lift2', '$weight4', '$weight5', '$weight6', '$reps4', '$reps5', '$reps6', '$secondary_Lift1', '$weight7', '$reps7', '$reps8', '$reps9', '$secondary_Lift2', '$weight8', '$reps10', '$reps11', '$reps12')"; 

if (mysqli_query($dbcon, $result)) {

    echo "Your workout has been saved.";
=======
$result = "INSERT INTO greekgod.workout (date, workout_day, key_lift1, weight1, weight2, weight3, reps1, reps2, reps3, key_lift2, weight4, weight5, weight6, reps4, reps5, reps6, secondary_lift1, weight7, reps7, reps8, reps9, secondary_Lift2, weight8, reps10, reps11, reps12) VALUES ('$date', '$workout_day', '$key_lift1', '$weight1', '$weight2', '$weight3', '$reps1', '$reps2', '$reps3', '$key_lift2', '$weight4', '$weight5', '$weight6', '$reps4', '$reps5', '$reps6', '$secondary_Lift1', '$weight7', '$reps7', '$reps8', '$reps9', '$secondary_Lift2', '$weight8', '$reps10', '$reps11', '$reps12')"; 

if (mysqli_query($dbcon, $result)) {

    echo "<br><br<br>Your workout has been saved.";
>>>>>>> 27620d2e02544ceca6159927c73437832afcbf11
     
} else {
    
    die("Error submitting form.");
}
  
mysqli_close($dbcon); 
<<<<<<< HEAD
}
 
?>

=======

?>
>>>>>>> 27620d2e02544ceca6159927c73437832afcbf11
</div>
  <div class="main-footer">
      <footer>
       <a href="http://twitter.com/natasha_marie_o"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        <a href="http://facebook.com/greek_esposa"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
        <p>&copy; 2015-2016 Natasha Osborne.</p>
        <a href="privacy.html">Privacy Policy</a>
      </footer>
  </div>
</body>
</html>
