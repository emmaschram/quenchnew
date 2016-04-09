<?php
include("../model/comment.php");

if($_POST['method'] == "insert"){
    insert_comment();
}

if($_POST['method'] == "getall"){
    get_comments();
}

if($_POST['method'] == "getusercomments"){
    get_user_comments();
}

if($_POST['method'] == "updatecomment"){
    update_comment();
}

if($_POST['method'] == "deletecomment"){
    delete_comment();
}
?>