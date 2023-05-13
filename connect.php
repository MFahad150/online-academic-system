<?php
// Database credentials
$servername = "localhost"; // Change if your database server is on a different host
$username = "root"; // Change if you have a different username
$password = ""; // Change if you have set a password
$dbname = "online-academic-system"; // Change if you have a different database name

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    
    // Prepare the SQL statement
    $sql = "INSERT INTO login (username, password, role) VALUES ('$username', '$password', '$role')";
    
    // Execute the First-query
    if($username == "admin" && $password == "admin123" && $role == "admin"){
        if ($conn->query($sql) === TRUE) {
            echo "Successfully LogIn";
            // header("Location: ./admin_dashboard.html", true, 301);
            echo "<script>setTimeout(\"location.href = './admin_dashboard.html';\",1500);</script>";
        } else {
            echo "Invalid Username or Password: " . "<br>" . $conn->error;
        }
    }
// Execute the second-query
elseif($username == "teacher" && $password == "teacher123" && $role == "teacher"){
    if ($conn->query($sql) === TRUE) {
            echo "Successfully LogIn";
            // header("Location: ./admin_dashboard.html", true, 301);
            echo "<script>setTimeout(\"location.href = './teacher_dashboard.html';\",1500);</script>";
        } else {
            echo "Invalid Username or Password: " . "<br>" . $conn->error;
        }
}

// Execute the third-query
else{
    if ($conn->query($sql) === TRUE && $username == "student" && $password == "student123" && $role == "student") {
        echo "Successfully LogIn";
        // header("Location: ./admin_dashboard.html", true, 301);
        echo "<script>setTimeout(\"location.href = './admin_dashboard.html';\",1500);</script>";
    } else {
        echo "Invalid Username or Password: " . "<br>" . $conn->error;
    }
}
}

// Close the database connection
$conn->close();
?>


