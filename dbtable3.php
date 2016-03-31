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
    <div class="primary-content t-border">
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

require'../connect_db.php';

// Create connection
$dbcon = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected". "<br>". "<br>";
}

?>

<table class="table">
 <tr></tr>
 <tr class="table_title">  
   <th> Date</th>
   <th>Secondary Lift</th>
   <th>Weight (lbs)</th>
   <th></th>
   <th>Reps</th>
   <th></th>
 </tr>
 <tr></tr>
 
 <?php
 
   $sql= "SELECT * FROM otstudyc_greekgod.Workouts WHERE workout_day = 'Workout A'";
   
  $result = mysqli_query($dbcon, $sql); 
  While ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
<tr class="t_column"> 
  <td><?php echo $rows['date']; ?></td>
  <td><?php echo $rows['secondary_lift1']; ?></td> 
  <td><?php echo $rows['weight7']; ?></td>  
  <td><?php echo $rows['reps7']; ?></td>
  <td><?php echo $rows['reps8']; ?></td>
  <td><?php echo $rows['reps9']; ?></td>
</tr>
<?php endwhile; ?> 
 </table> 
 
 <table class="table">
 <tr></tr>
 <tr class="table_title">  
   <th> Date</th>
   <th>Secondary Lift</th>
   <th>Weight (lbs)</th>
   <th></th>
   <th>Reps</th>
   <th></th>
  </tr>

 <?php
 
   $sql= "SELECT * FROM otstudyc_greekgod.Workouts WHERE workout_day = 'Workout A'";
   
  $result = mysqli_query($dbcon, $sql); 
  While ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>

<tr class="t_column">
  <td><?php echo $rows['date']; ?></td>
  <td><?php echo $rows['secondary_lift2']; ?></td>
  <td><?php echo $rows['weight8']; ?></td>  
  <td><?php echo $rows['reps10']; ?></td>
  <td><?php echo $rows['reps11']; ?></td>
  <td><?php echo $rows['reps12']; ?></td>
</tr>
<?php endwhile; ?> 

  </table> 
 </div>
</body>

</html>
