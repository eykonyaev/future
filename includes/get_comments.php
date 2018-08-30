<?php

require_once 'db_connect.php'; 

$data = array_reverse($pdo->query("SELECT name, comment, date FROM comments")->fetchAll());
