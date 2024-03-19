<?php

require "functions.php";
require "router.php";
// $data = [
//     "name" => "Filips",
//     "age" => 69,
//     "height" => 175
// ];

// $data2 = [
//     "name" => "Ruslans",
//     "height" => 190
// ];

// echo $data["age"];
// echo $data2["age"] ?? "Nav vecuma";

// if (isset($data["age"])) {
//     echo $data2 ["age"];
// }

// if (array_key_exists("age", $data2)){
//     echo $data2 ["age"];
// }



// $url = parse_url($_SERVER["REQUEST_URI"]) ["path"]; 

// $routes = [
//     "/"=> "controllers/index.php",
//     "/about"=> "controllers/about.php",
//     "/story"=> "controllers/story.php"
// ];

// if (array_key_exists($url, $routes)) {
//     require $routes[$url];
// } else {
//     http_response_code(404);
//     require "controllers/404.php";
// }

// switch($url) {
//     case "":
//     case "/":
//         require "controllers/index.php";
//         break;

//     case "":
//         case "/about":
//         require "controllers/about.php";
//         break;

//     case "":
//         case "/story":
//         require "controllers/story.php";
//         break;

//     case "":
//         case "/contacts":
//         require "controllers/contacts.php";
//         break;

//     case "":
//         case "/videos":
//         require "controllers/videos.php";
//         break; 

//     default:
//         http_response_code(404);
//         require "controllers/404.php";
// }

// if ($url == "/") {
//     require "controllers/index.php";
// } else if ($url == "/about") {
//     require "controllers/about.php";
// } else if ($url == "/story") {
//     require "controllers/story.php";
// } else {
//     http_response_code(404);
//     require "controllers/404.php";
// }