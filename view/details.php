<?php
require_once "../model/ProductsLogic.php";

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM services WHERE service_id='$id' ";
    $product = new Productslogic();

    $productArray = $product->readProduct($sql);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/account.css">
    <link rel="stylesheet" href="./fonts/remixicon.css">
    <title><?php echo $productArray[0]['service_name'];?></title>
</head>
<body class="bg-primary">

    <section id="product">
        <div class="bg-dark py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-5 me-lg-5">

            <section id="login" class="bg-dark py-4">
                <div class="container">
                    <div class="row">
                        <form action="logincheck.php" method="POST" class="">
                            <div class="row pb-5">
                                <div class="col-12 col-lg-12 text-white mx-auto text-center">
                                    <h2>Contacteren</h2>
                                </div>
                            </div> 

                            <div class="row pb-2">
                                <div class="col-12 col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 text-white">
                                            <label for="email">Onderwerp:</label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <input class="w-100" type="text" value="<?php echo $productArray[0]['service_name'];?>" name="email" id="email" autofocus required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 text-white">
                                            <label for="password">Bericht:</label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <textarea rows="6" cols="40" placeholder="Bericht..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row py-3">
                                <div class="col-12 col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 text-white">
                                            <label for="password">&nbsp;</label>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <input type="submit" value="Verzenden" class="w-100 btn btn-primary py-1">
                                        </div>
                                    </div>
                                </div>
                            </div>                  
                        </form>
                    </div>
                </div>
            </section>

                    </div>
                    <div class="col-12 col-md-12 col-lg-5 text-white">
                        <h1 class="border-bottom pb-2 mb-2"><?php echo  $productArray[0]['service_name'];?></h1>
                        <small class="badge bg-primary p-2"><?php echo  $productArray[0]['service_status'];?></small>
                        <small class="badge bg-success p-2"><?php echo  $productArray[0]['service_genre'];?></small>
                        
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6">
                                <a href="./contact.php" class="btn grey w-100">Stel een vraag</a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <a href="./account/login.php" class="btn dark w-100">Log in</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 text-white pt-3 d-inline-flex">
                                <div class="d-inline-flex">
                                    <ul>
                                        <li class="mb-1">Beveiligde diensten</li>
                                        <li class="mb-1">Helpdesk beschikbaar</li>
                                        <li class="mb-1">Goede reviews</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-lg-4 mx-lg-5 py-md-5 py-4">
                    <div class="text-white">
                        <h4 class="border-bottom pb-3">Beschrijving</h4>
                    </div>
                    <div class="text-white pt-2">
                        <p>
                        <?php if (!empty($productArray[0]["service_details"])) {
                            echo $productArray[0]["service_details"];
                        } ?>
                        <p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="footer">
        <div class="bg-primary py-4">
            <div class="container">
                <div class="row">
                    <div class="footer-title col-12 col-md-4 text-white">
                        <h2><a href="../" class="text-white text-decoration-none">Flex-Zipper</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>
