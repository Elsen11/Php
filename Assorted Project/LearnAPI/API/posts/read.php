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

//blog post query
$result = $post->read();

$num = $result->rowCount();

if ($num > 0) {
    $post_arr = array();
    $post_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'category_id' => $category_id,
            'category_name' => $category_name
        );
        //push to data
        array_push($post_arr['data'], $post_item);
    }
    echo json_encode($post_arr, JSON_PRETTY_PRINT);
} else {
    //no post
    echo json_encode(
        array('Message' => 'No Posts Found')
    );
}
