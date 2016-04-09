<?php
include("connect.php");

function insert_comment(){
    global $db;
    $query = "INSERT INTO comments (comment, user_id, image_id) VALUES ('".$_POST['comment']."', '".$_POST['user_id']."', '".$_POST['image_id']."')";
    $result = $db->query($query);
}

function get_comments(){
    global $db;
    $query = "SELECT comments.comment, comments.user_id, users.username 
    FROM comments 
    LEFT JOIN users ON comments.user_id = users.id
    WHERE image_id = '".$_POST['image_id']."' ";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_user_comments(){
    global $db;
    $query = "SELECT comments.comment, comments.user_id, comments.id, users.username 
    FROM comments 
    LEFT JOIN users ON comments.user_id = users.id
    WHERE image_id = '".$_POST['image_id']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}


function get_user_commentss(){
    global $db;
    $query = "SELECT * FROM comments WHERE user_id='".$_POST['user_id']."'";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_comment(){
    global $db;
    $query = "UPDATE comments SET comment='".$_POST['comment']."' WHERE id='".$_POST['id']."'";
    $result = $db->query($query);
}

function delete_comment(){
    global $db;
    $query = "DELETE FROM comments WHERE id= '".$_POST['id']."'";
    $result = $db->query($query);
}


?>