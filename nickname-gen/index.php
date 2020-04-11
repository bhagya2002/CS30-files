<!-- // NICKNAME GENERATOR
"use strict"; // Use strict mode

// Global Variables
let nicknames = ["the Emperor", "the Droideka", "the Jedi", "Twinkle Toes", "the Scientist", "the Tank"];
let index = 0;

// Add Event Listeners
$("#first").on("change", setFirstName);
$("#last").on("change", setLastName);
$("#next").on("click", next);
$("#prev").on("click", prev);
$("#random").on("click", randomNickname);

// Event Functions
function setFirstName() {
$("#firstDisplay").html($("#first").val());
}

function setLastName() {
$("#lastDisplay").html($("#last").val());
}

function next() {
index++;
if (index === nicknames.length) {
index = 0;
}
$("#nickname").html(nicknames[index]);
}

function prev() {
index--;
if (index === -1) {
index = nicknames.length - 1;
}
$("#nickname").html(nicknames[index]);
}

function randomNickname() {
let randomIndex = Math.floor(Math.random() * nicknames.length);
$("#nickname").html(nicknames[randomIndex]);
} -->


<?php

 $nicknames = ["the Emperor", "the Droideka", "the Jedi", "Twinkle Toes", "the Scientist", "the Tank"];
 $index = 0;
// <!-- random nickname -->
if (isset($_POST['random'])) {
$randval = ' ';

   $randomIndex = rand(0, $nicknames.length);
  $randval = $nicknames[$randomIndex];

}



?>


<!DOCTYPE html>
<html>

<!-- head -->

<head>
  <meta charset="utf-8" />
  <title>Nickname Generator</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>

<!-- body -->

<body>
  <!-- title -->
  <h1>Nickname Generator</h1>

  <!-- Instructions & Input -->
  <p>
    Enter your first and last name and then use the buttons to cycle through
    nicknames or get a random nickname.
  </p>
  <!-- enter first name -->
  <p>
    <!-- first name input -->
    First Name: <input id="first" type="text" value="John">
    <!-- last name input -->
    Last Name: <input id="last" type="text" value="Doe">
  </p>

  <!-- Nickname Display -->
  <div>
    <!-- show first name -->
    <p id="firstDisplay">First Name</p>
    <!-- show nickname -->
    <p id="nickname">Nickname</p>
    <!-- show last name -->
    <p id="lastDisplay">Last Name</p>
  </div>

  <!-- forward, backward, and random buttons -->
  <p>
    <button id="prev" name=prev>Prev</button>
    <button id="random" name="random">Random</button>
    <button id="next" name="next">Next</button>
  </p>

  <!--  LOAD JAVASCRIPT -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>

</html>