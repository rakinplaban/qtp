<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inflack";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uname = $_REQUEST["uname"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

// Check if the email already exists in the database
$checkEmailQuery = "SELECT * FROM inflackusers WHERE email = '$email'";
$result = mysqli_query($conn, $checkEmailQuery);

if (mysqli_num_rows($result) > 0) {
    echo "Email address is already in use.";
} else {
    // If the email is not in the database, proceed with the insertion
    $sql = "INSERT INTO inflackusers(uname, email, password)
            VALUES('$uname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Successfully registerde $uname email: $email";
    } else {
        echo "Error in inserting data " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
