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


class RecipeTest6 {
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

function getRecipes6() {
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


class RecipeTest7 {
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

function getRecipes7() {
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


class RecipeTest8 {
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

function getRecipes8() {
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


class RecipeTest9 {
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

function getRecipes9() {
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


class RecipeTest10 {
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

function getRecipes10() {
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


class RecipeTest11 {
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

function getRecipes11() {
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


class RecipeTest12 {
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

function getRecipes12() {
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


class RecipeTest13 {
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

function getRecipes13() {
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


class RecipeTest14 {
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

function getRecipes14() {
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


class RecipeTest15 {
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

function getRecipes15() {
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