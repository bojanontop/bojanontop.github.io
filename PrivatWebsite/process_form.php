<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $fname = $_POST["fname"];
    $pass = $_POST["pass"];

    // Store form data in session variables
    $_SESSION['fname'] = $fname;
    $_SESSION['pass'] = $pass;

    // Redirect user to main.php if they haven't accessed it via form submission
    if (!isset($_SESSION['form_submitted'])) {
        header("Location: ../PublicWebsite/index.html");
        exit();
    }
    header("Location: ../PublicWebsite/index.html");

    // Clear the flag indicating form submission
    unset($_SESSION['form_submitted']);
}
?>
