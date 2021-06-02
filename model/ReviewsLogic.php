<?php


    require_once '../model/DataHandler.php';
    require_once '../model/outputdata.php';

    //class om Products te handlen
    class ReviewsLogic {
        //properties

        //methods
          public function __construct(){
                $this->DataHandler = new DataHandler("localhost", "mysql" ,"flexzipper" ,"root" ,"");
            }

        function createReview($review_id, $name , $desc, $stars) {
            try { 
                $sql = "INSERT INTO reviews (review_id, name , review_desc, review_rate) VALUES ('$review_id', '$name' , '$desc', '$stars')";
                $res = $this->DataHandler->createData($sql);
                // $results = $res->fetchAll();
                // return$results;
            } catch (Exception $e) { throw $e; }
        }

        // function readProduct($id) {
        //     try { 
        //         $sql = 'SELECT * FROM services WHERE service_id="$id" ';
        //         $res = $this->DataHandler->readsData($sql);
        //         $results = $res->fetchAll();
        //         $outputdata = new OutputData();
        //         return $outputdata->createTable2($results);
        //         // return$results;
        //     } catch (Exception $e) { throw $e; }
        // }

        function readProduct($sql){
        
            $stmt = $this->DataHandler->readData($sql);
    
            $product = $stmt->fetchAll();
            return $product;
        }

        public function readAllProducts(){ 
            try { 
                $sql = 'SELECT * FROM services';
                $res = $this->DataHandler->readsData($sql);
                $results = $res->fetchAll();
                $outputdata = new OutputData();
         return $outputdata->createTable($results);
                // return$results;
            } catch (Exception $e) { throw $e; }
    }

        public function deleteProduct($id){ 
            try { 
                $sql = "DELETE FROM services WHERE service_id='$id' ";
                $res = $this->DataHandler->deleteData($sql);
                return "verwijderd";
                // return$results;
            } catch (Exception $e) { throw $e; }
    }

        function updateProduct($id, $product_name, $price, $desc) {
            try { 
                $sql = "UPDATE products SET product_name='$product_name',product_price='$price',other_product_details='$desc' WHERE product_id='$id'";
                $res = $this->DataHandler->updateData($sql);
                $answer = "Product " . $product_name . " was updated || " . $res . " rows updated <br><br>";
                $answer .= '<a id="button" href="../index.php">Overview</a>';
                return $answer;
            } catch (Exception $e) { throw $e; }
        }

        public function searchProduct($res){ 
            try { 
                $sql = "SELECT * FROM services WHERE service_name LIKE '$res%'";
                $res = $this->DataHandler->readsData($sql);
                $results = $res->fetchAll();
                $outputdata = new OutputData();
                echo $outputdata->createTable($results);
                // return$results;
            } catch (Exception $e) { throw $e; }
    }

        function __destruct() {
            $this->conn = null;
        }
    }
?>

