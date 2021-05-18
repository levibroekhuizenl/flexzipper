<?php


    require_once '../model/DataHandler.php';
    require_once '../model/outputdata.php';

    //class om Products te handlen
    class ProductsLogic {
        //properties

        //methods
          public function __construct(){
                $this->DataHandler = new DataHandler("localhost", "mysql" ,"flexzipper" ,"root" ,"");
            }

        function createProduct($service_name, $service_genre , $service_status, $service_details) {
            try { 
                $sql = "INSERT INTO services (service_name, service_genre , service_status, service_details) VALUES ('$service_name', '$service_genre' , '$service_status', '$service_details')";
                $res = $this->DataHandler->createData($sql);
                // $results = $res->fetchAll();
                // return$results;
            } catch (Exception $e) { throw $e; }
        }

        function readProduct($id) {
            try { 
                $sql = 'SELECT * FROM services WHERE product_id="$id" ';
                $res = $this->DataHandler->readsData($sql);
                $results = $res->fetchAll();
                $outputdata = new OutputData();
         return $outputdata->createTable2($results);
                // return$results;
            } catch (Exception $e) { throw $e; }
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
                $sql = "DELETE FROM products WHERE product_id='$id' ";
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

        function __destruct() {
            $this->conn = null;
        }
    }
?>

