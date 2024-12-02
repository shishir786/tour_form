<?php

if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    // database connection started
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Could not connect to" . mysqli_connect_error());
    }
    // echo "Connecting to...";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];


    $sql = "INSERT INTO `tour`.`tour` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

    //echo $sql;

    if ($con->query($sql) == true) {
        //echo "Successfully incerted";
    } else {
        echo "Error $sql <br> $con->error";
    }

    // database connection turned off
    $con->close();
}

?>




<!-- html started -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to travel Form</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap"
        rel="stylesheet">
</head>

<body>
    <img class="bg" src="image/bg.jpg" alt="Cox's Bazar">
    <div class="container">
        <h1>Welcome to Cox's Bazar Tour Form</h1>
        <p>Confirm your details to confirm your participation in to tour</p>

        <form action="index.php" method="post">


            <input type="text" name="name" id="name" placeholder="Enter your Name" />
            <input type="text" name="age" id="age" placeholder="Enter your Age" />
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender" />
            <input type="text" name="email" id="email" placeholder="Enter your Email" />
            <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" />
            <textarea name="other" id="other" placeholder="Enter Any other Information here"></textarea>
            <button class="btn">Submit</button>


        </form>
    </div>

</body>

</html>