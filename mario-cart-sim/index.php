<?php
// embedded PHP code into HTML for this assignment

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment #2</title>
</head>
<body>
<!-- title of the assignment -->
<h1>Mario Cart Simulator</h1>

<!-- the form that takes the information -->
<form action="#">
<!-- options list -->
    <select name="position" value="position">
<!-- options -->
    <option>Choose a position</option>
    <option>1-6</option>
    <option>7-12</option>
    </select>
    <br>
    
<!-- button for running through the simulation once -->
    <button type="submit" value="submit" name="get1">Run Simulation Once</button>
<!-- button for running through the simulation five times -->
    <button type="submit" value="submit" name="get5">Run Simulation 5 Times</button>

</form>

<!-- sim is run 1 time -->
<p>
<?php 
// button clicked for one run of the simulation
if(isset($_GET['get1'])) {
    // varibales
    $pos = $_GET['position'];
    $result1a = ' ';
    $result1b = ' ';
    // random # between 0, 100;
    $ranNum1 = rand(0, 100);

    // check which option is selected
    switch ($pos) {
        // case 1 (nothing is choosen)
        case "Choose a position":
            $result1a = "Please choose a position";
            echo $result1a;
        break;
        // case 2 (position 1-6)
        case "1-6":
            if ($ranNum1 >=0 && $ranNum1 <= 45) {
                $result1a = "You got a BANANA!";
                echo $result1a;
            } else if ($ranNum1 >45 && $ranNum1 <= 75) {
                $result1a = "You got a GREEN SHELL!";
                echo $result1a;
            } else if ($ranNum1 >75 && $ranNum1 <= 95) {
                $result1a = "You got a STAR!";
                echo $result1a;
            } else if ($ranNum1 >95 && $ranNum1 <= 99) {
                $result1a = "You got a GOLDEN MUSHROOM!";
                echo $result1a;
            } else {
                $result1a = "You got the BULLET BILL!";
                echo $result1a;
            }
        break;
            // case 3 (position 7-12)
            case "7-12":
                if ($ranNum1 >=0 && $ranNum1 <= 5) {
                    $result1b = "You got a BANANA!";
                    echo $result1b;
                } else if ($ranNum1 >5 && $ranNum1 <= 10) {
                    $result1b = "You got a GREEN SHELL!";
                    echo $result1b;
                } else if ($ranNum1 >10 && $ranNum1 <= 30) {
                    $result1b = "You got a STAR!";
                    echo $result1b;
                } else if ($ranNum1 >30 && $ranNum1 <= 40) {
                    $result1b = "You got a GOLDEN MUSHROOM!";
                    echo $result1b;
                } else {
                    $result1b = "You got the BULLET BILL!";
                    echo $result1b;
                }
            break;
    }
}
?>
</p>

<!-- sim is run 5 time -->
<p>
<?php 
// button clicked for five runs of the simulation
if(isset($_GET['get5'])) {
    // varibales
    $pos = $_GET['position'];
    $result2a = ' ';

    // random # between 0, 100;
    $ranNum2 = rand(0, 100);

    // check options
    switch ($pos) {
        // case 1 (nothing is choosen)
        case "Choose a position":
            $result2a = "Please choose a position";
            echo $result2a;
        break;
        // case 2 (position 1-6)
        case "1-6":
            for ($i = 0; $i <5; $i++) {
            if ($ranNum2 >=0 && $ranNum2 <= 45) {
                $result2a = "You got a BANANA!";
                echo "$result2a<br>";
            } else if ($ranNum2 >45 && $ranNum2 <= 75) {
                $result2a = "You got a GREEN SHELL!";
                echo "$result2a<br>";
            } else if ($ranNum2 >75 && $ranNum2 <= 95) {
                $result2a = "You got a STAR!";
                echo "$result2a<br>";
            } else if ($ranNum2 >95 && $ranNum2 <= 99) {
                $result2a = "You got a GOLDEN MUSHROOM!";
                echo "$result2a<br>";
            } else {
                $result2a = "You got the BULLET BILL!";
                echo "$result2a<br>";
            }
        }
        break;
            // case 3 (position 7-12)
            case "7-12":
                for ($i = 0; $i <5; $i++) {
                if ($ranNum2 >=0 && $ranNum2 <= 5) {
                    $result2a = "You got a BANANA!";
                    echo "$result2a<br>";
                } else if ($ranNum2 >5 && $ranNum2 <= 10) {
                    $result2a = "You got a GREEN SHELL!";
                    echo "$result2a<br>";
                } else if ($ranNum2 >10 && $ranNum2 <= 30) {
                    $result2a = "You got a STAR!";
                    echo "$result2a<br>";
                } else if ($ranNum2 >30 && $ranNum2 <= 40) {
                    $result2a = "You got a GOLDEN MUSHROOM!";
                    echo "$result2a<br>";
                } else {
                    $result2a = "You got the BULLET BILL!";
                    echo "$result2a<br>";
                }
            }
            break;
    }
}
?>
</p>

    
</body>
</html>