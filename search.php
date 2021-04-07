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
        echo "<table>
            <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Location</th>
            <th>Email</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['BookName']."</td>";
            echo "<td>".$row['Author']."</td>";
            echo "<td>".$row['Price']."</td>";
            echo "<td>".$row['SellerLocation']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo  "User with Name: $bookName doesn't exist.";
    }

    $conn->close();
?>

