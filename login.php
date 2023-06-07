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
if (isset($_POST['UsernameEmail']) && isset($_POST['Password'])) {
    $usernameEmail = $_POST['UsernameEmail'];
    $password = $_POST['Password'];

    // Checking if the email/username and password exist in the database
    $sql = "SELECT * FROM onlinestore_user WHERE (Email = '$usernameEmail' OR FullName = '$usernameEmail') AND User_Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
        // Redirect to home page or any other desired page
        header("Location: home.php");
        exit();
    } else {
        // echo "<script>console.log('Connection to server created successfully');</script>";
        $error = "Invalid username/email or password";
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
    <title>Login</title>
</head>

<body>
    <div class="Main-box">
        <form action="#" method="post" autocomplete="off">
            <!-- Adding style to heading -->
            <h2><u>Login</u></h2>
            <?php if (isset($error)) { ?>
                <div class="error"><?php echo $error; ?></div>

            <?php } ?>
            <div class="input-box">
                <input name="UsernameEmail" type="text" required="required" autocomplete="off" placeholder="Username or Email"><br>
            </div>
            <div class="input-box">
                <input name="Password" type="password" required="required" autocomplete="off" placeholder="Password"><br>
                <button type="submit">Login</button>
            </div>
            <input class="resat" type="reset">
        </form>
    </div>
</body>

</html>