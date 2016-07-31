<?php
/**
 * Created by PhpStorm.
 * User: gay_k
 * Date: 31/07/2016
 * Time: 21:22
 */

// Get the publication from ID
$app->get('/publication/{id}', function ($request, $response, $args) {
    $id = $request->getAttribute('id');
    $data = array('message' => "Publication ID : $id", 'time' => time());
    return $response->withJson($data, 200);
});

// Post the publication
$app->post('/publication', function ($request, $response, $args) {
    $data = array('message' => "true", 'time' => time());
    return $response->withJson($data, 200);
});

// Get publication with special parameters
$app->get('/publication', function ($request, $response, $args) {
    $data = array('message' => "true", 'time' => time());
    return $response->withJson($data, 200);
});

?>