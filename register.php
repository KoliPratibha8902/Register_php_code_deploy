<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Insert data into database
    $sql = "INSERT INTO users (name, username, email, phone) VALUES ('$name', '$username', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
