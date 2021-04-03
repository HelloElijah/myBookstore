<?php
    $sName = $_POST["uname"];
    $psw = $_POST["psw"];

    //database information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cp476";

    //create the SQL query string
    $sql = "SELECT * FROM BookStoreUser WHERE UserName = '$sName'";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $psw_database = $row['Password'];

        if ($psw_database == $psw){
            Echo "Correct";
        }
        else{
            echo "Password is not correct!";
        }
    } 
    else {
        echo  "User with Name: $sName doesn't exist.";
    }

    $conn->close();
?>