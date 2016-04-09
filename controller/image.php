<?php
include("../model/image.php");

if($_POST['method'] == "insert"){
    insert_image();
}

if($_POST['method'] == "getfeed"){
    get_feed();
}

if($_POST['method'] == "getuserimage"){
    get_user_images();
}

if($_POST['method'] == "getsingleimage"){
    get_single_image();
}

if($_POST['method'] == "update"){
    update_image();
}

if($_POST['method'] == "delete"){
    delete_image();
}
?>