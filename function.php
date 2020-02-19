<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php-todo";

// connectie maken

try {
    $conn = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


// functie's om query uit te voeren

function GetAllCheck($conn){
    $query = $conn->prepare('SELECT * FROM todo');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function GetCheck($id,$conn){
    $query = $conn->prepare('SELECT * FROM todo WHERE id=:id');
    $query->execute([':id' => $id]);
    $result = $query->fetch();
    return $result;
}


?>
</body>
</html>