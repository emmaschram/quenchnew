<?php 
include("../model/user.php");

if($_POST['method'] == "insert"){
    insert_user();
}

if($_POST['method'] == "login"){
    user_login();
}

if($_POST['method'] == "changepass"){
    change_password();
}

?>