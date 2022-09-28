<?php
require_once "functions.php";
$db = require_once "databases/start.php";
if(isset($_POST['send'])){
    $data = [
        "title" => $_POST['title'],
        "text" => $_POST['text']
    ];
    $db->update('tasks', $data, $_GET['id']);
    header("Location: index.php");
}