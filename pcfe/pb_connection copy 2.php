<?php
// Database connection details
$servername = "104.152.222.128";  // Your database server (keep it as it is)
$username = "suhadamaaru_coop_online_business"; // Your database username
$password = "Pulasthi@123"; // Your database password (be careful with security)
$dbname = "suhadamaaru_coop_online_business"; // Your database name

// Step 1: Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Step 2: Check if connection is successful
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

// Step 3: Confirm database selection (Not necessary, but for learning)
if (!mysqli_select_db($conn, $dbname)) {
    die("❌ Database selection failed: " . mysqli_error($conn));
}

// Step 4: Success message
echo "✅ Connected successfully!";
?>
