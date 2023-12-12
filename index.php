<?php 

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require 'config.php';

$db = new Database($config['database']);
$posts = $db->query('SELECT * FROM posts')->fetchAll();

dd($posts);

/* 

    ------- PDO FETCHALL VS PDO FETCH -------

    ->fetchAll returns an associative array;

    ->fetch returns a string;

*/