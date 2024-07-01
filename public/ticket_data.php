<?php
// Database connection (replace with your credentials)
$servername = "34.23.248.39";
$username = "pm-user";
$password = "Password123!";
$dbname = "tickets";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tickets = array();

$sql = "SELECT * FROM triage_tickets";
$result = $conn->query($sql);

// Fetch Data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tickets[] = $row;
    }
}

// JSON Encode and Output
header('Content-Type: application/json');
echo json_encode($tickets);