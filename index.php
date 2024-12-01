<?php

if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    // database connection started
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Could not connect to". mysqli_connect_error());
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

if($con->query($sql)== true){
    //echo "Successfully incerted";
}
else {
    echo "Error $sql <br> $con->error";
}

// database connection turned off
$con->close();

}

?>


<!-- html started -->
