<?php
require_once '../model/ProductsLogic.php';
require_once '../model/ReviewsLogic.php';
require_once '../model/outputdata.php';
class ReviewsController {
        //properties

        //methods
        function __construct() {
            $this->ReviewsLogic = new ReviewsLogic();
        }

        function handleRequest() {
            try {

                $todo = isset($_REQUEST['todo']) ? $todo = $_REQUEST['todo'] : $todo = 'read';

                switch ($todo) {
                    case 'createform':
                        include '../view/create.php';
                        break;
                    case 'create':
                        $review_id = $_REQUEST['review_id'];
                        $name = $_REQUEST['name'];
                        $desc = $_REQUEST['desc'];
                        $stars = $_REQUEST['stars'];
                        $this->collectCreateReview($review_id, $name , $desc, $stars);
                        header('Location: ../view/details.php?id=' . $review_id . '');
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

        function collectCreateReview($review_id, $name , $desc, $stars) {
            $products = $this->ReviewsLogic->createReview($review_id, $name , $desc, $stars);
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

$new = new ReviewsController();
$new->handleRequest();

    // echo $database->collectReadProduct();

?>