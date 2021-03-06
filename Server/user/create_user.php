<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../object/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$data = json_decode(file_get_contents("php://input"));

$user->nom = $data->nom;
$user->prenom = $data->prenom;
$user->email = $data->email;
$user->password = $data->password;

if (
    !empty($user->nom) &&
    !empty($user->prenom) &&
    !empty($user->email) &&
    !empty($user->password) &&
    $user->create()
) {

    http_response_code(200);

    echo json_encode(array("message" => "User was created."));
} else {

    http_response_code(400);

    echo json_encode(array("message" => "Unable to create user."));
}
