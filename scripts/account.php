<?php 

require_once("dbconnect.php");

/**
 * @return "Welcome back ..." for success or "Error! Email or password is incorrect!" for error
 */
function login($email, $password) {
    $conn = connectDB();
    
    // check if the account already exists
    $sql = "SELECT * FROM users WHERE email=" . $email;
    $result = $conn->query($sql);
    if ($result) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($row["password"] === $password) {
                $ret = "Welcome back ". $row["name"] . "!";
                $conn->close();
                return $ret;
            }
        }
    }

    $conn->close();
    return "Error! Email or password is incorrect!":
}

/**
 * @return int 0 if success, 1 if there already exists an account, 2 if there was an error
 */
function sign_up($name, $email, $password) {
    $conn = connectDB();
    
    // check if the account already exists
    $sql = "SELECT * FROM users WHERE email=" . $email;
    $result = $conn->query($sql);
    if ($result) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $conn->close();
            return 1;
        }
    }

    // otherwise, add it to the db
    $sql = "INSERT INTO users(name, email, password) VALUES('{$name}', '{$email}', '{$password}')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return 0;
    }
    $conn->close();
    return 2;

}
?>