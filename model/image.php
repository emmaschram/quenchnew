<?php
include("connect.php");

function insert_image(){
    global $db;
    $query = "INSERT INTO images (title, user_id, path, description) VALUES ('".$_POST['title']."', '".$_POST['user_id']."', '".$_POST['path']."', '".$_POST['description']."')";
    $result = $db->query($query);
}

function get_feed(){
    global $db;
    $query = "SELECT * FROM images";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_user_images(){
    global $db;
    $query = "SELECT * FROM images WHERE user_id='".$_POST['user_id']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_single_image(){
    global $db;
    $query = "SELECT * FROM images WHERE id='".$_POST['image_id']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_image(){
    global $db;
    $query = "UPDATE images SET title='".$_POST['title']."', description='".$_POST['description']."' WHERE id='".$_POST['user_id']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function delete_image(){
    global $db;
    $query = "DELETE FROM images WHERE id = '".$_POST['image_id']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

?>