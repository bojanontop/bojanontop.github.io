
<?php


if (isset($sesion)){
    $sesion = $_SESSION["sesion"];
}else{
    $sesion = "0";
}
if ($sesion == "1") {
    header("Location: ../PublicWebsite/index.html");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id="Main-h1">Admin Page</h1>
<form action="" method="get">
    <label for="aname">
        <input type="text" name="aname" id="aname" placeholder="Username">
    </label>
    <label for="apass">
        <input type="password" name="apass" id="apass" placeholder="Password">
    </label>
    <label for="acode">
        <input type="password" name="acode" id="apass" placeholder="code">
    </label>
    <input type="submit" value="Submit" id="asubmit" >
</form>

<?php
if (isset($_GET["aname"]) && isset($_GET["apass"]) && isset($_GET["acode"])) {
    $aname = $_GET["aname"]; # Get the value from the input field
    $apass = $_GET["apass"]; # Get the value from the input field
    $acode = $_GET["acode"]; # Get the value from the input field


    # Check if the input fields are equal to the predefined values
    if ($aname == "Admin" && $apass == "1234" && $acode == "1223"/*$_GET["savecode"]*/) {
        ?>
        <style>
            #Main-h1{
                display: none;
            }
            form{
                display: none;
            }
        </style>
        <?php
        echo "Welcome Admin!". "<br>" . "You have successfully logged in!" . "<br>" . "Here are the messages from the users:" . "<br>" . "<br>";
        $conn = new mysqli("localhost", "root", "", "main");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            $sql = "SELECT * FROM main;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    ?>
                    <ul class="form-list">
                        
                        <li class="form-list-item"><?php $count = $row["id"]; echo $row["id"] . "<br>Name: <b>". $row["name"] . "</b><br> SureName: <b>" . $row["sname"] . "</b><br> Email: <b>" . $row["email"] . "</b><br> Phone: <b>" . $row["tel"] . "</b><br> Text: <br><b><p>" .$row["subject"]?></b></p><br><br></li>
                    </ul>
                    <?php
                    
                    ?>
                    
                    <?php
                }
            }

        }


    } else {
        echo "Someting went wrong! Please try again!";
    }
} else {
    $counter = 0;
    $c = 0;
    $c += 1;
    $counter += 1;
    if ($c == 2){
        echo "Please enter your credentials!";
    }

    if ($counter == 3){
        echo "You have entered wrong credentials 3 times!";
    }
}




if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'delete':
            del($count, $conn);
            break;
    }
}



?>

</body>
</html>