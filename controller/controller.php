<!-- <html>
    <head>
        <link rel='stylesheet' href='style.css'>
    </head>
</html>

<?php
require 'datahandler.php';
require 'outputdata.php';
require 'filehandler.php';

$productname = $_REQUEST['productname'];
$price = $_REQUEST['product_price'];
$details = $_REQUEST['details'];
echo 'details:' .  $details;
$supplier_id = $_REQUEST['supplier_id'];
$database = new DataHandler('localhost', 'root', '', 'products');
$outputdata = new OutputData();
// $filehandler = new FileHandler($_REQUEST['filename'], $_REQUEST['content']);

switch ($_REQUEST['todo']) {
    case 'create':
        // var_dump($_REQUEST);
        $succes = $database->createData('insert into products (product_name, product_price, other_product_details, supplier_id) VALUES (?, ?, ?, ?)', $productname, $price, $details, $supplier_id);
        echo $succes;
        echo "<br>";
        break;
    case 'read':
         $rows = $database->readData('SELECT * FROM products');
         echo $outputdata->createTable($rows);
        break;
    case 'update':
        $succes = $database->updateDoc();
        echo $succes;
        echo "<br>";
        break;
    case 'delete':
        $succes = $database->deleteData("DELETE FROM products WHERE supplier_id=?", $supplier_id);
        echo $succes;
        echo "<br>";
        break;
}

?> -->