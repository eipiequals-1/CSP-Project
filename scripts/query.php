<?php
require_once("dbconnect.php");

class Recipe {
    public $name;
    public $url;
    public $ingredients;
    public $procedure;

    public __construct($name, $url, $ingredients, $procedure) {
        $this->name = $name; 
        $this->url = $url; 
        $this->ingredients = $ingredients; 
        $this->procedure = $procedure; 
    }
}

function getRecipes() {
    $conn = connectDB();
    $sql = "SELECT * FROM recipe";
    $result = $conn->query($sql);

    $to_return = array();
    if ($result) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($array, new Recipe($row["name"], $row["url"], $row["ingredients"], $row["procedure"]));
        }
    }
    $conn->close();
    return $to_return;
}

?>