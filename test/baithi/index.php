<?php

//die(__DIR__.'/vendor/autoload.php');
//require __DIR__ . 'vendor/autoload.php';
require ('vendor/autoload.php');
use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$controller = new Controller\ProductsController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
include_once 'app/View/backend/layouts/header.php';
try {
    switch ($page){

        case 'create-product':
            $controller->createProduct();
            break;
        case 'delete-product':
            $controller->deleteProduct();
            break;
        case 'update-product':
            $controller->updateProduct();
            break;
        case 'timkiem':
            $controller->searchData();
            break;
        default:
            $controller->showAllProducts();
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
include_once 'app/View/backend/layouts/footer.php';