<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["sesion"] = True;
    $sesion = $_SESSION["sesion"];
    $name = $_POST["name"];
    $sname = $_POST["sname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $subject = $_POST["subject"];

    /*$sqlUsername = "Admin";
    $sqlPassword = "";


    $conn = new mysqli("localhost", $sqlUsername, $sqlPassword, "admin");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        $sql = "SELECT * FROM admin;";
        $adminResult = mysqli_query($conn, $sql);
        $adminResultCheck = mysqli_num_rows($result);

        if ($adminResultCheck > 0) {
            $username = $adminResult["Username"];
            $password = $adminResult["Password"];
            $savecode = $adminResult["Savecode"];
        }

    }*/


    $conn = new mysqli("localhost", "root", "", "main");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        $smtm = $conn->prepare("INSERT INTO main (name, sname, email, tel, subject) VALUES (?, ?, ?, ?, ?)");
        $smtm->bind_param("sssss", $name, $sname, $email, $tel, $subject);
        $smtm->execute();
        echo "Succesfully sent!";
        $smtm->close();
        $conn->close();
    }



    $string_query = http_build_query(array(
        "name" => $name,
        "sname" => $sname,
        "email" => $email,
        "phone" => $phone,
        "subject" => $subject,
        "sesion" => $sesion,
        "savecode" => $savecode,
        "password"=> $password,
        "username" => $username
    ));

    header("Location: main.php?" . $string_query);
    exit;
}

?>