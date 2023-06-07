<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinestore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<script>console.log('Connection to server created successfully');</script>";

// Values will be processed only if they are not empty
if (isset($_POST['FullName']) && isset($_POST['Email']) && isset($_POST['Password'])) {
    $fullName = $_POST['FullName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Sending user's information to the database
    $sql = "INSERT INTO onlinestore_user (FullName, Email, User_Password)
            VALUES ('$fullName', '$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New record created successfully");</script>';
        echo "<script>console.log('New record created successfully');</script>";
    } else {
        echo '<script>alert("Error: ' . $conn->error . '");</script>';
        echo "<script>console.log('Error: " . $conn->error . "');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="Main-box">
        <form action="#" method="post" autocomplete="off">
            <!-- Adding style to heading -->
            <h2><u>Sign Up</u></h2>
            <div class="input-box">
                <input name="FullName" type="text" required="required" autocomplete="off" placeholder="Full name"><br>
            </div>
            <div class="input-box">
                <input name="Email" type="email" required="required" autocomplete="off" placeholder="Email"><br>
            </div>
            <div class="input-box">
                <input name="Password" type="password" required="required" autocomplete="off" placeholder="Password"><br>
                <button type="submit">Sign Up</button>
            </div>
            <input class="resat" type="reset">
        </form>
    </div>
</body>
</html> 

<?php

// echo round(-pi(), precision:2);

// echo abs(-pi());



// echo is_nan(sqrt(-pi()));

// /*                                    Operators                                    */
// $x = 55;
// $y = "55";
// // echo $x += $y . $x;

// print $x *= $y;
// print $x /= $y;
// print $x %= $y;


// // Equality Operators checks numaric equality b/w var and values and returns boolean.
// var_dump ($x == $y);

// // Identical Operators checks numaric and datatype equality b/w var and values and returns boolean.
// var_dump ($x === $y);

// /*                                Negation Operators                                    */

// // (!=) Not equal operator Returns true if $x is not equal to $y
// var_dump ($x != $y);

// // (!=) Not identical operator 	Returns true if $x is not equal to $y, or they are not of the same type
// var_dump ($x !== $y);



?>

