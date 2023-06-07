<?php
// Calculate modulus using the modulo operator (%)
if (isset($_POST['num1']) && isset($_POST['num2'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  $modulus = $num1 % $num2;

  echo "<script>console.log( 'Modulus of $num1 and $num2 is: $modulus');</script>";

  echo "Modulus of $num1 and $num2 is: <b> $modulus <b>";
}
?>

<?php
// Calculate Addition using the Addition operator (+)
if (isset($_POST['num3']) && isset($_POST['num4'])) {
  $num3 = $_POST['num3'];
  $num4 = $_POST['num4'];

  $Addition = $num3 + $num4;

  echo "<script>console.log( 'Addition of $num3 and $num4 is: $Addition');</script>";

  echo "Addition of $num3 and $num4 is: $Addition";
}
?>


<?php
// Calculate Subtraction using the Addition operator (-)
if (isset($_POST['num5']) && isset($_POST['num6'])) {
  $num5 = $_POST['num5'];
  $num6 = $_POST['num6'];

  $Subtraction = $num5 - $num6;

  echo "<script>console.log( 'Subtraction of $num5 and $num6 is: $Subtraction');</script>";

  echo "Subtraction of $num5 and $num6 is: $Subtraction";
}
?>


<?php

$cars = array(
  "prado",
  "carola",
  "civic",
  "honda"
);

echo "<pre>";
print_r($cars);
echo "</pre>";
?>







<!DOCTYPE html>
<html>

<head>
  <title>Modulus Calculator</title>
</head>

<body>
  <!--                 Moduluse of two values            -->

  <h3>Enter two values to get their modulus</h3>
  <form action="#" method="post">
    <label for="num1">Number 1:</label>
    <input type="text" name="num1" id="num1" required><br><br>

    <label for="num2">Number 2:</label>
    <input type="text" name="num2" id="num2" required><br><br>

    <input type="submit" value="Calculate">
  </form>

  <!--                 Addition of two values            -->


  <h3>Enter two values to get their Addition</h3>
  <form action="#" method="post">
    <label for="num3">Number 1:</label>
    <input type="text" name="num3" id="num3" required><br><br>

    <label for="num4">Number 2:</label>
    <input type="text" name="num4" id="num4" required><br><br>

    <input type="submit" value="Calculate">
  </form>




  <!--                 Subtraction of two values            -->


  <h3>Enter two values to get their Subtraction.</h3>
  <form action="#" method="post">
    <label for="num5">Number 1:</label>
    <input type="text" name="num5" id="num5" required><br><br>

    <label for="num6">Number 2:</label>
    <input type="text" name="num6" id="num6" required><br><br>

    <input type="submit" value="Calculate">
  </form>
</body>

</html>