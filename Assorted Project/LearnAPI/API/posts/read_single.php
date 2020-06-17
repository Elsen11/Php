<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post.php';

//instantiance a connect
$database = new Database();
$db = $database->connect();

// instanciate blog post object
$post = new Post($db);

//get ID
$post->id = isset($_GET['id']) ? $_GET['id'] : die();

//get post
$post->SingleRead();

$post_arr = array(
    'id' => $post->id,
    'title' => $post->title,
    'body' => $post->body,
    'author' => $post->author,
    'category_id' => $post->category_id,
    'category_name' => $post->category_name,
);

print_r(json_encode($post_arr, JSON_PRETTY_PRINT));
