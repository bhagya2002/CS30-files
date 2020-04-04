<?php
// when the submit button is pressed
if (isset($_GET['submit'])) {
    // varibales for the sides and result
$num1 = $_GET['number1'];
$num2 = $_GET['number2'];
$calc = ' ';

// the use of the variables in the formula
$calc  = sqrt(($num1**2)+($num2**2));

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment #1</title>
</head>
<body>
<!-- Header of the page -->
<h1>Assignment #1</h1>

<!-- insert and calc values -->
    <form action="#">
    <!-- insert values later used to calculate -->
    <input type="text" name="number1" placeholder="length of side A">
    <input type="text" name="number2" placeholder="length of side B">
    <!-- submit button -->
    <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

<!-- round the answer and display -->
<p>
The length of side C is:
<?php echo round($calc, 2); ?>
</p>

</body>
</html>