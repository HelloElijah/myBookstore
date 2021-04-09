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
    $n=0;
    if ($result->num_rows > 0) {
        // echo "<table>
        //     <tr>
        //     <th>Title</th>
        //     <th>Author</th>
        //     <th>Price</th>
        //     <th>Location</th>
        //     <th>Email</th>
        //     </tr>";

        while ($row = $result->fetch_assoc()) {
            // echo "<tr>";
            // echo "<td>".$row['BookName']."</td>";
            // echo "<td>".$row['Author']."</td>";
            // echo "<td>".$row['Price']."</td>";
            // echo "<td>".$row['SellerLocation']."</td>";
            // echo "<td>".$row['Email']."</td>";
            // echo "</tr>";
            if ($result->num_rows % 2==0){
                echo "<div class='middlebox'>";
                echo "<img src=".$row['bookURL']."width='93' height='95' alt='photo 1' />";
                echo "<p>".$row['BookName']."</p>";
                echo "<p class='price'><b>Price:</b> <b>".$row['Price']."</b></p>";
                echo "<p>".$row['Author']."</p>";
                echo "<p>".$row['SellerLocation']."</p>";
                echo "<p>".$row['Email']."</p>";
                echo "<p><button>Add to Favorite</button></p>";
                echo "</div>";
            }
            elseif ($result->num_rows % 3==0){
                echo "<div class='rightbox'>";
                echo "<img src=".$row['bookURL']."width='93' height='95' alt='photo 1' />";                echo "<p>".$row['BookName']."</p>";
                echo "<p class='price'><b>Price:</b> <b>".$row['Price']."</b></p>";
                echo "<p>".$row['Author']."</p>";
                echo "<p>".$row['SellerLocation']."</p>";
                echo "<p>".$row['Email']."</p>";
                echo "<p><button>Add to Favorite</button></p>";
                echo "</div>";
            }
            else{
                echo "<div class='leftbox'>";
                echo "<img src=".$row['bookURL']."width='93' height='95' alt='photo 1' />";                echo "<p>".$row['BookName']."</p>";
                echo "<p class='price'><b>Price:</b> <b>".$row['Price']."</b></p>";
                echo "<p>".$row['Author']."</p>";
                echo "<p>".$row['SellerLocation']."</p>";
                echo "<p>".$row['Email']."</p>";
                echo "<p><button>Add to Favorite</button></p>";
                echo "</div>";
            }
            
        }
        // echo "</table>";
    } else {
        echo  "Book with Name: $bookName doesn't exist.";
    }

    $conn->close();
