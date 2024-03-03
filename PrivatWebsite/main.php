
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form method="post" id="form">
        <input type="text" name="fname" id="fname"><br>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        $name = $_POST['fname'];
        $pass = $_POST['pass'];
        $rpass = "admin";
        if ($pass == $rpass || $name == "admin") {
            echo "Welcome, " . $name . "!<br>";
            echo "Your password is: " . $pass . "<br>";
            session_start();
            // Set a flag to indicate that the form has been submitted
            $_SESSION['form_submitted'] = true;
            // Display the form data
            if (isset($_SESSION['fname']) && isset($_SESSION['pass'])) {
                $fname = $_SESSION['fname'];
                $pass = $_SESSION['pass'];

                echo "First Name: $fname <br>";
                echo "Password: $pass <br>";

                // Clear session variables after displaying them
                unset($_SESSION['fname']);
                unset($_SESSION['pass']);
            } else {
                echo "Form data not available.";
            }
        }else{
            echo "Please fill out the form";
        }