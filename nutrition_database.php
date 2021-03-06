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
       <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
        <li><a href="input.php" class="selected">Input</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="nutrition.php">Nutrition</a></li>
        <li><a href="includes/nutritiontable.php">Nutrition Database Entry</a></li>
      </ul>
      </nav>
      <div class="fcontainer">
      <form action= "includes/nutrition.php" method="post" >
      	<h2> Nutrition Input</h2> <br>
      	<div class="head_section">
      	  <span> Please complete all of the fields.</span><br><br>
      	  <label for="Food Name" class="flabels">
      	   <span> Food Name:</span>
      	  </label>
      	  <input type="name" name="food_name" id="fname" fdate="food_name" placeholder="Enter the name of food here"></input><br><br>     	  
      	  <label for="Food Brand" class="flabels">
      	    <span>Food Brand: </span>
      	  </label>
      	    <input type="name" name="food_brand" id="fbrand" fdate="food_brand" placeholder="Enter the brand name here"></input><br><br>
          <label for="Serving Amount" class="flabels">
      	    <span>Serving amount (g, ml, oz etc): </span>
      	  </label>
      	  <input type="name" name="serving_amount" id="s_amount" fdate="serving_amount" placeholder="0"></input><br><br>
           <input type="radio" name="s_unit" class="s_grams" value="grams">grams &nbsp; &nbsp;
           <input type="radio" name="s_unit" class="s_grams" value="ml">ml &nbsp; &nbsp;
           <input type="radio" name="s_unit" class="s_grams" value="mg">mg &nbsp; &nbsp;
           <input type="radio" name="s_unit" class="s_grams" value="oz">oz<br><br>
         <label for="Serving Size" class="flabels">
      	    <span>Number of Servings: </span>
      	  </label>
      	    <input type="name" name="serving_size" id="s_size" fdate="serving_size" placeholder="1"></input><br><br><br><br>
      	 <label for="Total Calories" class="flabels">
      	    <span>Total Calories: </span> 
      	 </label>
      	    <input type="name" name="total_calories" class="n_input"  placeholder="0.0"></input><br><br> 
         <label for="Fat (gr)" class="flabels">
      	    <span>Fat (gr): </span> 
      	 </label>
      	    <input type="name" name="fat_grams" class="n_input"  placeholder="0.0"></input><br><br>  
         <label for="Carbohydrate (gr)" class="flabels">
      	    <span>Carbohydrate (gr): </span> 
      	 </label>
      	    <input type="name" name="carbohydrate_grams" class="n_input"  placeholder="0.0"></input><br><br> 
         <label for="Protein (gr)" class="flabels">
      	    <span>Protein (gr): </span> 
      	 </label>
      	    <input type="name" name="protein_grams" class="n_input"  placeholder="0.0"></input><br><br>
         <label for="Total (gr)" class="flabels">
      	    <span>Total (gr): </span> 
      	 </label>
      	    <input type="name" name="total_grams" class="n_input"  placeholder="0.0"></input><br><br>  	     	
      	</div>
      	<label>
      	<input type="submit" id="submit" class="button" value="Add to database"></input>
      	</label>
      </form>     
     </div>
     </div>
     <div class="main-footer2">
      <footer>
       <a href="http://twitter.com/natasha_marie_o"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        <a href="http://facebook.com/greek_esposa"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
        <p>&copy; 2015-2016 Natasha Osborne.</p>
        <li><a href="privacy.html">Privacy Policy</a></li>
      </footer>
    </div>
   </body>
</html>
