<?php
// global variables
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$randval = "Nickname";
$nicknames = array("the Emperor", "the Droideka", "the Jedi", "Twinkle Toes", "the Scientist", "the Tank");
$randomi = rand(1, count($nicknames));

// random nickname gen
if (isset($_GET['random'])) {

//  run this
// takes the nicknames array and uses the random index -1 to compensate for array properties
 $randval = $nicknames[$randomi - 1];
} 

// list all nicknames
if (isset($_GET['all'])) {

//  run this
// loops through the whole array and displys all the nicknames
 for ($i = 1 ;$i <= count($nicknames); $i++) {
  $randval = $nicknames[$i -1];
 }
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
  <p id="randname-d" name="value"><?php echo "$randval"; ?></p>
  <!-- last name -->
  <p id="last-d"><?php echo "$lname"; ?></p>
</div>

<!-- operation buttons -->
<button id="prev" name="prev">Prev</button>
<button id="random" name="random">Random</button>
<button id="next" name="next">Next</button>
<br>
<button id="all" name="all">List All Nicknames</button>

</form>

</body>

</html>