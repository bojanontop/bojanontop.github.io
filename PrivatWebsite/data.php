<?php
$sqlUsername = "Admin";
$sqlPassword = "";


$conn = new mysqli("localhost", $sqlUsername, $sqlPassword, "admin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $sql = "SELECT * FROM admin;";
    $adminResult = mysqli_query($conn, $sql);
    $adminResultCheck = mysqli_num_rows($result);

    if ($adminResultCheck > 0) {
        $Username = $adminResult["Username"];
        $Password = $adminResult["Password"];
        $Savecode = $adminResult["Savecode"];
    }

}



?>