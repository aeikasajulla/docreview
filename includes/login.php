<?php
require("db.php");
if(session_status() !== PHP_SESSION_ACTIVE) session_start();

if (isset($_POST["login"])) {
    // Receive login details
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Verify login details
    $loginDetailsStmt = $conn->prepare("SELECT * FROM accounts WHERE email=? AND password=?");
    $loginDetailsStmt->bind_param("ss", $email, $password);
    $loginDetailsStmt->execute();
    $loginDetailsResult = $loginDetailsStmt->get_result();
    $loginDetailsRow = $loginDetailsResult->fetch_assoc();

    // Check status
    if ($loginDetailsRow["status"] == "Online") {
        echo '<script>
            alert("User is already logged in.");
            window.location.href="../index.php";
            </script>';
        exit();
    }
}

// If a result exists, otherwise prompt invalid
if ($loginDetailsResult->num_rows > 0) {
    // Initialize session to user's details
    $_SESSION["user"] = $email;
    $_SESSION["fname"] = $loginDetailsRow["firstName"];
    $_SESSION["lname"] = $loginDetailsRow["lastName"];

    // Make user online
    $updateStatusStmt = "UPDATE accounts SET status='Online' WHERE email='$email'";
    mysqli_query($conn, $updateStatusStmt);

    // Identify user role then redirect to corresponding page
    if ($loginDetailsRow["role"] == "Admin") {
        header("Location: ../admin-home.php");
    }
    if ($loginDetailsRow["role"] == "Requester") {
        header("Location: ../requester-home.php");
    }
    if ($loginDetailsRow["role"] == "Reviewer") {
        header("Location: ../reviewer-home.php");
    }
} else {
    echo '<script>
            alert("Incorrect email or password.");
            window.location.href="../index.php";
            </script>';
    exit();
}
