<?php
    header("Content-Type: text/plain");

    //get information
    $uname = $_POST["uname"];
    $psw1 = $_POST["psw1"];
    $psw2 = $_POST["psw2"];

    //database information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cp476";

    //Check whether input is valid
    if ($uname == ''){
        echo "You Need to Enter the User Name";
    }
    else if ($psw1 == ''){
        echo "You Need to Enter the Password";
    }
    else if ($psw2 == ''){
        echo "You Need to Enter the Password Agian";
    }
    else if ($psw1 != $psw2){
        echo "Password Does not match";
    }
    else {
        //Check whether the user name exist or not
        $sql = "SELECT * FROM bookstoreuser WHERE UserName = '$uname'";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
        $result = $conn->query($sql);

        // Insert
        if ($result->num_rows == 0) {
            //create the SQL query string
            $sql = "Insert into bookstoreuser(UserName,Password) ".
                    " values ('$uname','$psw1')";

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
    }

    
    // //Check whether the user name exist or not
    // $sql = "SELECT * FROM bookstoreuser WHERE UserName = '$uname'";
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    // $result = $conn->query($sql);

    // // Insert
    // if ($result->num_rows == 0) {
    //     //create the SQL query string
    //     $sql = "Insert into bookstoreuser(UserName,Password) ".
    //             " values ('$uname','$psw')";

    //     $conn = new mysqli($servername, $username, $password, $dbname);
    //     if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    
    //     $result = $conn->query($sql);
    //     if ($result === TRUE) {
    //         echo "User: " . $uname .  " was Sign Up Successfully!";
    //     } 
    //     else {
    //     echo "Error creating database: " . $conn->error;
    //     }
    // }
    // else{
    //     echo "Sadly, User: " . $uname . " was existed. \n";
    //     echo "Choose another User Name";
    // }
    // $conn->close();
?>