<?php

        // database work
        $host = "localhost";
        $dbname = "p1recipe2022";
        $user = "root";
        $password = "";
        $port = 3306;
        // Create connection
        $conn = new mysqli("localhost", $user, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM recipe";
        $result = $conn->query($sql);

        if ($result) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["first"]. " " . $row["last"]. "<br>";
            }
        }
?>
      <div class="search-container">
        <input type="text" placeholder="Search for recipes..." />
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>