<?php 

//echo $_SERVER['REQUEST_URI'];

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Note";  
$currentUserId = 3;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    ':id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

/* Response::FORBIDDEN ---> From Response.php: 403 - access denied */
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require 'views/note.view.php';  