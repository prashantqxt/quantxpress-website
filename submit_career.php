<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB config
$servername = "localhost";
$username = "u479035143_qxtnew"; // Change if needed
$password = "Qxtnew@123";     // Change if your MySQL has a password
$dbname = "u479035143_contact_form";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("<script>alert('Database connection failed.'); window.history.back();</script>");
}

// Get form data
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$location = $_POST['location'] ?? '';

// Upload directory
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle resume upload
$resumePath = '';
if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
    $resumePath = $uploadDir . basename($_FILES['resume']['name']);
    move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath);
}

// Handle cover letter upload (optional)
$coverPath = '';
if (isset($_FILES['coverLetter']) && $_FILES['coverLetter']['error'] == 0) {
    $coverPath = $uploadDir . basename($_FILES['coverLetter']['name']);
    move_uploaded_file($_FILES['coverLetter']['tmp_name'], $coverPath);
}

// Insert into database
$sql = "INSERT INTO career_applications (first_name, last_name, email, phone, location, resume_path, cover_letter_path)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $firstName, $lastName, $email, $phone, $location, $resumePath, $coverPath);

if ($stmt->execute()) {
    echo "<script>alert('Application submitted successfully!'); window.location.href='careers.php';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
