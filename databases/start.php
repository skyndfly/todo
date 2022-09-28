<?php

$config = require_once "config.php";
require_once "databases/QueryBuilder.php";
require_once "databases/Connection.php";

return  new QueryBuilder(Connection::make($config['database']));