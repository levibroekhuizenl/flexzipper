<?php

session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    header("location: ./account.php");
}else{
    if(isset($_SESSION['loggedin'])){
        session_unset($_SESSION['loggedin']);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Inloggen</title>
</head>
<body>

        <div id="loading">
          <div class="row h-100">
            <div class="container">
              <div class="row h-100 justify-content-center">
                <div class="col-12 text-center my-auto">
                  <img src="../../img/logo.png" height="50%" width="50%">
                </div>
              </div>
            </div>
          </div>
        </div>

    <section id="login" class="py-5">
        <div class="container">
            <div class="row">
                <form action="logincheck.php" method="POST" class="">
                    <div class="row pb-5">
                        <div class="col-12 col-lg-6  mx-auto text-center">
                            <h2><b>Inloggen<b></h2>
                        </div>
                    </div> 

                    <div class="row pb-2">
                        <div class="col-12 col-lg-6 mx-auto center-block">
                            <div class="row">
                            <div class="col-1">
                                     <!-- Blank space -->
                                </div>
                                <div class="col-10 text-white">
                                    <input class="w-100" type="number" placeholder="Leerlingnummer" name="schoolnumber" id="schoolnumber" autofocus required>
                                </div>

                                <div class="col-1">
                                    <!-- Blank space -->
                                </div>
                            </div>
                        </div>
                    </div>

                    
                            <div class="row">
                                <div class="col-1">
                                     <!-- Blank space -->
                                </div>
                                <div class="col-10">
                                    <input class="w-100 float-right" type="password" placeholder="Wachtwoord" name="password" id="password" required>
                                    <a href="./passwordrecovery.php" class="no-underline">Wachtwoord vergeten?</a>
                                </div>
                                <div class="col-1">
                                     <!-- Blank space -->
                                </div>
                            </div>
                        

                    <div class="row py-3">
                        <div class="col-12 col-lg-6 mx-auto">
                            <div class="row">
                                <div class="col-1">
                                     <!-- Blank space -->
                                </div>
                                <div class="col-8 text-white">
                                    <label for="password" class="hidden">&nbsp;</label>
                                    <input type="submit" value="Inloggen" class="w-100 btn blue py-1">
                                    <a class="no-underline" href="./register.php">Maak een account aan</a>
                                </div>
                                <div class="col-3">
                                    <!-- Blank space -->
                                </div>
                            </div>
                        </div>
                    </div>                  
                </form>
            </div>
        </div>
    </section>

</body>
</html>

<script>
setTimeout(function() {
  var element = document.getElementById('loading');
  element.classList += " hidden";
}, 2000);
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
