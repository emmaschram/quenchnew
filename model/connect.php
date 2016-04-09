<?php
try {
    $db = new PDO("mysql:dbname=henryfinal;host=localhost", "root", "root");
} catch (PDOException $e){
    echo "FAIL";
}
?>