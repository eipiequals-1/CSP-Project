<?php
require_once("dbconnect.php");

class Recipe {
    public $name;
    public $url;
    public $ingredients;
    public $procedure;

    function __construct($name, $url, $ingredients, $procedure) {
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


class RecipeTest {
    public $name;
    public $url;
    public $ingredients;
    public $procedure;

    function __construct($name, $url, $ingredients, $procedure) {
        $this->name = $name; 
        $this->url = $url; 
        $this->ingredients = $ingredients; 
        $this->procedure = $procedure; 
    }
}

function getRecipes2() {
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

class RecipeTest3 {
    public $name;
    public $url;
    public $ingredients;
    public $procedure;

    function __construct($name, $url, $ingredients, $procedure) {
        $this->name = $name; 
        $this->url = $url; 
        $this->ingredients = $ingredients; 
        $this->procedure = $procedure; 
    }
}

function getRecipes3() {
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


class RecipeTest5 {
    public $name;
    public $url;
    public $ingredients;
    public $procedure;

    function __construct($name, $url, $ingredients, $procedure) {
        $this->name = $name; 
        $this->url = $url; 
        $this->ingredients = $ingredients; 
        $this->procedure = $procedure; 
    }
}

function getRecipes5() {
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

class RecipeTest4 {
    public $name;
    public $url;
    public $ingredients;
    public $procedure;

    function __construct($name, $url, $ingredients, $procedure) {
        $this->name = $name; 
        $this->url = $url; 
        $this->ingredients = $ingredients; 
        $this->procedure = $procedure; 
    }
}

function getRecipes4() {
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