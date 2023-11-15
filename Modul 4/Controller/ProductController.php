<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller{

use ResponseFormatter;

public function __construct()
{
    $this->controllerName = "Get All Product";

    $this->controllerMethod = "GET";
}

public function getAllProduct(){
    $dummyData = [
        "Air Mineral",
        "Kebab",
        "Spagetti",
        "Jus Jambu"
    ];

    $response = [
        "controller_attribute" => $this ->getControllerAttribute(),
        "product" => $dummyData
    ];

    return $this -> ResponseFormatter(200, "success", $response);
}

}