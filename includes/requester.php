<?php
session_start();
if (isset($_SESSION["user"])) {
    if ($_SESSION["role"] == "Requester") {
        // echo 'Login Successful';
    } else {
        echo '<script>
            alert("Not allowed.");
            window.location.href="index.php";
            </script>';
        include("logout.php");
    }
} else {
    echo '<script>
    alert("Log in first.");
    window.location.href="index.php";
    </script>';
}

require("db.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
