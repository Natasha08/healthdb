<?php
 
 if ( $_POST)
{

require '../connect_db.php';

if (!$dbcon) {
     die('Connection Failed');
} else {
     echo "Great Job!";
 }    

$results = "INSERT INTO otstudyc_greekgod.Workout_B (date, key_lift1, weight1, weight2, weight3, reps1, reps2, reps3, key_lift2, weight4, weight5, weight6, reps4, reps5, reps6, secondary_lift1, weight7, reps7, reps8, reps9, secondary_Lift2, weight8, reps10, reps11, reps12) VALUES ('$date', '$key_lift1', '$weight1', '$weight2', '$weight3', '$reps1', '$reps2', '$reps3', '$key_lift2', '$weight4', '$weight5', '$weight6', '$reps4', '$reps5', '$reps6', '$secondary_Lift1', '$weight7', '$reps7', '$reps8', '$reps9', '$secondary_Lift2', '$weight8', '$reps10', '$reps11', '$reps12')"; 

if (mysqli_query($dbcon, $results)) {

    echo "Your workout has been saved.";
     
} else {
    
    die("Error submitting form.");
}


mysqli_close($dbcon); 

 }

?>
