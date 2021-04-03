<?php
    header("Content-Type: text/plain");
        
    //User Name
    $bookName = $_GET["bookName"];

    //variable to hold customer info
    $sInfo = "";

    //database information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cp476";

    //create the SQL query string
    $sql = "SELECT * FROM bookstore WHERE BookName = '$bookName'";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sInfo = "Book: ".$row['BookName']."<br />"."Author: ".
            $row['Author']."<br />"."Price: ".$row['Price'].
            "Seller Location: ".$row['SellerLocation']."</a>";
        }
    } else {
        echo  "User with Name: $bookName doesn't exist.";
    }

    $conn->close();
    echo $sInfo;
?>

