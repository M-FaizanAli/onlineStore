<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect the user to the login page
    header("Location: http://localhost/onlineStore/login.php");
    exit();
}
?>


<?php
// Calculate modulus using the modulo operator (%)
    if(isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $modulus = $num1 % $num2;

        echo "<script>console.log( 'Modulus of $num1 and $num2 is: $modulus');</script>";

        echo "Modulus of $num1 and $num2 is: <b> $modulus <b>";
    }
?>


<?php
$linebreak="<br>";
echo $linebreak;
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hmstyle.css">
    <title>Document</title>
</head>
<body>
    <h1 class="heading" ><u>Let's learn PHP.</u></h1>

    <h2> Global and Local Scope of variables</h2>
    <p>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</p>


    <?php
    $x = 5; // global scope

    // function myTest() {
    // // using x inside this function will generate an error
    // echo "<p>Variable x inside function is: $x</p>";
    // }
    // myTest();

    // echo "<p>Variable x outside function is: $x</p>";
    // ?>

    <p><br>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</p>


    <?php
    // function myTest() {
    //     $x = 5; // local scope
    //     echo "<p>Variable x inside function is: $x</p>";
    // }
    // myTest();

    // // using x outside the function will generate an error
    // // echo "<p>Variable x outside function is: $x</p>";
    // ?>

    <h2>DATA TYPES</h2>
    <h3>Strings</h3>
    <p>A string is a sequence of characters</p>
    <h4>PHP String Functions</br></h4>
    <h5>strlen() - Return the Length of a String</h5>
    <?php
        echo "the lenght of 'Hello world!' is:";
        echo strlen("Hello world!"); // outputs 12
    ?> 
    <h5><br>The PHP str_word_count() function counts the number of words in a string.</h5>
    <?php
        echo "the number of words in 'Hello world!' is:";
        echo str_word_count("Hello world!"); // outputs 2
    ?>
    <h5><br>The PHP strrev() function reverses a string.</h5>
    <?php
        echo "reverse of string 'Hello world!' is:";
        echo strrev("Hello world!"); // outputs !dlrow olleH
    ?>

    <?php
    //The PHP strpos() function searches for a specific text within a string
        echo strpos("Hello world!", "world"); // outputs 6
    ?>

    <?php
    //The PHP str_replace() function replaces some characters with some other characters in a string.

        echo str_replace("world", "Dolly", "Hello world!") ; // outputs Hello Dolly!
    ?>
    <?php
    // It will return the value as infinite
        $x = 1.9e411;
        var_dump($x);
    ?>


    <h3>Enter two values to get their modulus</h3>
    <form action="#" method="post">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" required><br><br>
        
        <input type="submit" value="Calculate">
    </form>





</body>
</html>