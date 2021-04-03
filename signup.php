<?php
    header("Content-Type: text/plain");

    //get information
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];
    $city = $_POST["city"];
    $email = $_POST["email"];

    //database information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cp476";
    
    //Check whether the user name exist or not
    $sql = "SELECT * FROM bookstoreuser WHERE UserName = '$uname'";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    $result = $conn->query($sql);

    // Insert
    if ($result->num_rows == 0) {
        //create the SQL query string
        $sql = "Insert into bookstoreuser(UserName,Password,City,Email) ".
                " values ('$uname','$psw','$city','$email')";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    
        $result = $conn->query($sql);
        if ($result === TRUE) {
            echo "User: " . $uname .  " was Sign Up Successfully!";
        } 
        else {
        echo "Error creating database: " . $conn->error;
        }
    }
    else{
        echo "Sadly, User: " . $uname . " was existed. \n";
        echo "Choose another User Name";
    }
    $conn->close();
?>