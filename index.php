<?php

require_once "functions.php";
$db = require_once "databases/start.php";

if (isset($_POST['send'])){
    $posts = $db->search('tasks', $_POST['search']);
}else{
    $posts = $db->getAll('tasks');
}

require_once 'index.view.php';
?>
