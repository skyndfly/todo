<?php
$db = require_once "databases/start.php";
if(isset($_POST['send'])){
    $data = [
        "title" => $_POST['title'],
        "text" => $_POST['text']
    ];
    $db->create('tasks', $data);
    header("Location: index.php");
}