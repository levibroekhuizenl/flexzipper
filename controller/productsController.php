<?php
require_once '../model/ProductsLogic.php';
require_once '../model/outputdata.php';
class ProductsController {
        //properties

        //methods
        function __construct() {
            $this->ProductsLogic = new ProductsLogic();
        }

        function handleRequest() {
            try {

                $todo = isset($_REQUEST['todo']) ? $todo = $_REQUEST['todo'] : $todo = 'read';

                switch ($todo) {
                    case 'createform':
                        include '../view/create.php';
                        break;
                    case 'create':
                        $service_name = $_REQUEST['service_name'];
                        $service_genre = $_REQUEST['service_genre'];
                        $service_status = $_REQUEST['service_status'];
                        $service_details = $_REQUEST['service_details'];
                        $this->collectCreateProduct($service_name, $service_genre , $service_status, $service_details);
                        echo '<h1> aangemaakt </h1>';
                        break;
                    case 'read':
                        $this->collectreadAllProducts();
                        break;
                    case 'update':
                        $product_name = $_REQUEST['product_name'];
                        $price = $_REQUEST['price'];
                        $desc = $_REQUEST['desc'];
                        $id = $_REQUEST['product_id'];
                        $this->collectUpdateProduct($id, $product_name, $price, $desc);
                        break;
                    case 'reads':
                        $this->collectreadAllProducts();
                        break;
                    case 'updateform':
                        $id = $_REQUEST['id'];
                        $this->collectReadProduct($id);
                        include '../view/update.php';
                        break;
                    case 'search':
                        $res = $_REQUEST['search'];
                        $this->collectSearchProduct($res);
                        break;
                    case 'delete':
                        echo 'test';
                        $this->collectDeleteProduct($_REQUEST['id']);
                        header("Location: ../index.php");
                        echo 'verwijderd';
                        break;
                    default:
                        $this->collectreadAllProducts();
                }

            }catch (Exeption $e){
                throw $e;
            }
        }

        function collectCreateProduct($service_name, $service_genre , $service_status, $service_details) {
            $products = $this->ProductsLogic->createProduct($service_name, $service_genre , $service_status, $service_details);
            // include '../view/Products.php';
        }

         public function collectReadProduct($id) {
            $products = $this->ProductsLogic->readProduct($id);
            include '../view/read.php';
        }

        function collectreadAllProducts() {
            $products = $this->ProductsLogic->readAllProducts();
            include '../view/read.php';
        }

        function collectUpdateProduct($id, $product_name, $price, $desc) {
           $products = $this->ProductsLogic->updateProduct($id, $product_name, $price, $desc);
            include '../view/read.php';
        }

        function collectDeleteProduct($id) {
            $products = $this->ProductsLogic->deleteProduct($id);
        }

        function collectSearchProduct($res) {
            $products = $this->ProductsLogic->searchProduct($res);
        }

        function __destruct() {
            $this->conn = null;
        }
    }

$new = new ProductsController();
$new->handleRequest();

    // echo $database->collectReadProduct();

?>