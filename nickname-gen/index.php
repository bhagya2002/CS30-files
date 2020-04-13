<?php
include('db_connect.php');
// global variables
// $fname = $_GET['fname'];
// $lname = $_GET['lname'];
$randval = "Nickname";
$varall = "All Nicknames";
$nicknames = array("the Emperor", "the Droideka", "the Jedi", "Twinkle Toes", "the Scientist", "the Tank");
$randomi = rand(1, count($nicknames));
$randname = 'SELECT COUNT(*) FROM nickname';
// make query & get results
$result = mysqli_query($conn, $randname);

// fetch the resulting rows as an array
$todos = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo $todos;

// random nickname gen
if (isset($_GET['random'])) {



//  run this
// takes the nicknames array and uses the random index -1 to compensate for array properties
//  $randval = $nicknames[$randomi - 1];
//  $varall = " ";
} 

// add a nickname
if(isset($_GET['add-nam'])) {
  $addname = $_GET['add-n'];

// run this
array_push($nicknames, $addname);
print_r($nicknames);
}

?>

<!DOCTYPE html>
<html>

<!-- head -->
<head>
  <meta charset="utf-8" />
  <title>Nickname Generator</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<!-- body -->
<body>

<!-- form -->
<form action="#">

<!-- get user info -->
<!-- first name -->
<label for="fname">First Name:</label>
<input type="text" name="fname" id="fname" value="John">
<!-- last name -->
<label for="lname">Last Name:</label>
<input type="text" name="lname" id="lname" value="Doe">

<!-- display info -->
<div>
<!-- first name -->
  <p id="fname-d"><?php echo "$fname"; ?></p>
  <!-- random nickname -->
  <p id="randname-d" name="value">
  <?php 
  echo $randval; 
  
  ?></p>
  <p id="allname-d" name="value-a">
  <?php  
  // list all nicknames
if (isset($_GET['all'])) {
  $indexer = 0;
  
  //  run this
  // loops through the whole array and displys all the nicknames
   for ($i = 1 ; $i < count($nicknames) +1; $i++) {
      $indexer = $i -1;
      
      $varall = "$nicknames[$indexer]<br>";
  echo $varall;
   }
  } 
  ?></p>
  <!-- last name -->
  <p id="last-d"><?php echo "$lname"; ?></p>
</div>

<!-- operation buttons -->
<button id="prev" name="prev">Prev</button>
<button id="random" name="random">Random</button>
<button id="next" name="next">Next</button>
<br>
<button id="all" name="all">List All Nicknames</button>
<br>

<!-- user entered -->
<!-- add nickname -->
<label for="add-n">Add nickname:</label>
<input type="text" name="add-n" id="add-n">
<button name="add-nam">Add Nickname</button>

</form>

</body>

</html>