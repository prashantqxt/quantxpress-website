<?php
// Database connection
$servername = "localhost";
$username = "u479035143_qxtnew"; // Change if needed
$password = "Qxtnew@123";     // Change if your MySQL has a password
$dbname = "u479035143_contact_form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect POST data
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$location = $_POST['location'] ?? '';
$interest = $_POST['interest'] ?? '';
$moreInfo = $_POST['moreInfo'] ?? '';

// Insert into DB
$sql = "INSERT INTO contacts (first_name, last_name, email, phone, location, interest, more_info)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $firstName, $lastName, $email, $phone, $location, $interest, $moreInfo);

if ($stmt->execute()) {
    echo "<script>
        alert('Success! Your information has been submitted.');
        window.location.href = 'contact-us.php';
    </script>";
} else {
    echo "<script>alert('Error submitting form: " . $stmt->error . "'); window.history.back();</script>";
}


$stmt->close();
$conn->close();
?>
