<?php
include("connect.php");

function insert_user(){
    global $db;
    $query = "INSERT INTO users (username, password) VALUES ('".$_POST['username']."', '".$_POST['password']."')";
    $result = $db->query($query);
}

function user_login(){
    global $db;
    $query = "SELECT id FROM users WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function change_password(){
    global $db;
    $query = "UPDATE users SET password = '".$_POST['password']."' WHERE id = '".$_POST['user_id']."'";
    $result = $db->query($query);
}



?>