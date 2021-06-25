<?php
session_start();
if($_SESSION['loggedin'] == true){
}else{
        session_destroy();
        header("location: ./login.php");
}?>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Mijn Account</title>
</head>
<body>

    <section id="login" class="py-5">
        <div class="container">
            <div class="row">
                <div>
                    <p class="text-white">Weet je zeker dat je wilt uitloggen?</p>
                <a href="./logout.php" class="btn bg-green">Ja</a>
                <a href="../../index.php" class="btn bg-green">Nee</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
