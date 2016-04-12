<?php
	session_start();
	require 'login_tools.php';
	
?>
<!DOCTYPE html>
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
         <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
         <li><a href="login.php">Logout</a></li><em><?php print_r ($_SESSION['first_name']);?></em>
       </ul>
      </nav>
      <nav>
      <ul>
        <li><a href="reports.php" class="selected">Reports</a></li>
        <li><a href="input.php">Workout Input</a></li>
        <li><a href="nutrition.php">Nutrition</a></li>
      </ul>
     </nav> 
     <div class="report_divs">
   <form action= "dbtable.php" method="post" class="reports">
      
      <input class="submit" type="submit" value="Workout A: Key Lifts Report">    	
     </form>
     </div>
     <div class="report_divs"> 
  <form action= "dbtable2.php" method="post" class="reports">      
      <input class="submit" type="submit" value="Workout B: Key Lifts Report">   	
     </form>  
     </div>
     <div class="report_divs"> 
  <form action= "dbtable3.php" method="post" class="reports">
      	<input class="submit" type="submit" value="Workout A: Secondary Lift Report">     	
     </form> 
     </div>
     <div class="report_divs">  
  <form action= "dbtable4.php" method="post" class="reports">
      	<input class="submit" type="submit" value="Workout B: Secondary Lifts Report">     	
     </form> 
     </div>  
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