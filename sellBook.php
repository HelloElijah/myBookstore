<?php

    header("Content-Type: text/plain");

    //get information
    $title = $_GET["title"];
    $author = $_GET["author"];
    $location = $_GET["location"];
    $price = $_GET["price"];
    $email = $_GET["email"];

    //Check whether input is valid
    if ($title == ''){
        echo "You Need to Enter the Title of Book";
    }
    else if ($author == ''){
        echo "You Need to Enter the Author of Book";
    }
    else if ($location == ''){
        echo "You Need to Enter Your Location";
    }
    else if ($price == ''){
        echo "You Need to Enter the Price for Sell";
    }
    else if (!is_numeric($price)){
        echo "Price should be a Number";
    }
    else if ($email == ''){
        echo "You Need to Enter the Email for Contact";
    }
    else {
        //create the SQL query string
        $sql = "Insert into bookstore(BookName,Author,SellerLocation,Price,Email) ".
                " values ('$title','$author','$location','$price','$email')";

        //database information
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cp476";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    
        $result = $conn->query($sql);
        if ($result === TRUE) {
            echo "Insert Successfully";
        } else {
        echo "Error creating database: " . $conn->error;
        }
        $conn->close();
    }

?>