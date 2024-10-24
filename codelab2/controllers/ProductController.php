<?php

namespace Controller;

include "traits/ResponseFormatter.php";
include "controllers/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller {
    use ResponseFormatter;

    public function __construct() {
        $this->controllerName = "Get ALL Product";
        $this->controllerMethod = "Get";
    }

    public function getAllproduct() {
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];

        return $this->responseFormatter(200, "Success", $response);
    }
};