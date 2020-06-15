<?php

require_once './model/LibroModel.php';
require_once './view/view_functions.php';

$libro = null;
     
if (isset($_GET["id"])){
    $id = $_GET["id"];
    $libro = getLibroById($id);

} else {
    $libro = getLibroByRandom();

}

$content=[];
$content["book"] = $libro;

renderPage("libro-bello.html", $content);