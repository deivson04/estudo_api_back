<?php 
// Permitir CORS para qualquer origem
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With");


// Ler o corpo da requisição JSON
echo json_encode($_GET);
// var_dump($_GET);
die;

