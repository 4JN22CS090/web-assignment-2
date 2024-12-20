<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$checkin = $_POST['checkin'];
$symptoms = $_POST['symptoms'];
$address = $_POST['address'];

// Insert data into database
$sql = "INSERT INTO hospital (name, email, phone, dob, checkin, symptoms, address)
VALUES ('$name', '$email', '$phone', '$dob', '$checkin', '$symptoms', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Appointment Booking Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Booked Appointment Details</Details></h1>
        <p><strong>Name:</strong> <?= ($name) ?></p>
        <p><strong>Email:</strong> <?= ($email) ?></p>
        <p><strong>Phone Number:</strong> <?= ($phone) ?></p>
        <p><strong>Date of Birth:</strong> <?= ($dob) ?></p>
        <p><strong>Appointment Date-Time:</strong> <?= ($checkin) ?></p>
        <p><strong>Symptoms:</strong> <?= ($symptoms) ?></p>
        <p><strong>Address:</strong> <?= ($address) ?></p>
    </div>
</body>
</html>