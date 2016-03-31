<html>
  <head>
    <meta charset="utf-8">
    <title>Kinobuild</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href='http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body class="mainBody">
    <header id="top" class="main-header2">
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
   <th>Key Lift</th>
   <th></th>
   <th>Weight (lbs)</th>
   <th></th>
   <th></th>
   <th>Reps</th>
   <th></th>
 </tr>
 <tr></tr>
 
 <?php
 
   $sql= "SELECT * FROM otstudyc_greekgod.Workouts WHERE workout_day = 'Workout B'";
   
  $result = mysqli_query($dbcon, $sql); 
  While ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
<tr class="t_column"> 
  <td><?php echo $rows['date']; ?></td>
  <td><?php echo $rows['key_lift1']; ?></td> 
  <td><?php echo $rows['weight1']; ?></td>
  <td><?php echo $rows['weight2']; ?></td>
  <td><?php echo $rows['weight3']; ?></td>  
  <td><?php echo $rows['reps1']; ?></td>
  <td><?php echo $rows['reps2']; ?></td>
  <td><?php echo $rows['reps3']; ?></td>
</tr>
<?php endwhile; ?> 
 </table> 
 
 <table class="table">
 <tr></tr>
 <tr class="table_title">  
   <th> Date</th>
   <th>Key Lift</th>
   <th></th>
   <th>Weight (lbs)</th>
   <th></th>
   <th></th>
   <th>Reps</th>
   <th></th>
  </tr>

 <?php
 
   $sql= "SELECT * FROM otstudyc_greekgod.Workouts WHERE workout_day = 'Workout B'";
   
  $result = mysqli_query($dbcon, $sql); 
  While ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>

<tr class="t_column">
  <td><?php echo $rows['date']; ?></td>
  <td><?php echo $rows['key_lift2']; ?></td>
  <td><?php echo $rows['weight4']; ?></td>
  <td><?php echo $rows['weight5']; ?></td>
  <td><?php echo $rows['weight6']; ?></td>  
  <td><?php echo $rows['reps4']; ?></td>
  <td><?php echo $rows['reps5']; ?></td>
  <td><?php echo $rows['reps6']; ?></td>
</tr>
<?php endwhile; ?> 

  </table> 
 </div>
</body>

</html>
