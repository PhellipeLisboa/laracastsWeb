<?php 

require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';

/* $config = require 'config.php';
$db = new Database($config['database']); */

/* 
$id = $_GET['id'];
$query = 'SELECT * FROM posts WHERE id = :id';

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts); */





/* 

    ------- PDO FETCHALL VS PDO FETCH -------

    ->fetchAll returns an associative array;

    ->fetch returns a string;

*/