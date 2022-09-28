<?php

require_once "functions.php";
$db = require_once "databases/start.php";
$db->delete('tasks',  $_GET['id']);
header("Location: index.php");
