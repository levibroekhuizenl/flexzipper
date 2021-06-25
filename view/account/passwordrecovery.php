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
                <form action="./recoveryconfirm.php" class="">
                    <div class="row pb-5">
                        <div class="col-6 text-white mx-auto text-center">
                            <h2>Wachtwoord Wijzigen</h2>
                        </div>
                    </div> 

                    <div class="row pb-2">
                        <div class="col-12 mx-auto">
                            <div class="row">
                                <div class="col-1">
                                    
                                </div>
                                <div class="col-10 col-md-6 col-lg-6">
                                    <input class="w-100" type="number" placeholder="Leerlingnummer" name="schoolnumber" id="schoolnumber" autofocus required>
                                </div>
                                <div class="col-1">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pb-2">
                        <div class="col-12 mx-auto">
                            <div class="row">
                                    <div class="col-1">
                                    
                                    </div>
                                <div class="col-10">
                                    <input class="w-100" type="password" placeholder="Nieuwe Wachtwoord" name="newpassword" autofocus required>
                                </div>
                                <div class="col-1">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="row">
                                <div class="col-1">
                                    
                                </div>
                                <div class="col-10">
                                    <input class="w-100" type="password" placeholder="Herhaal Nieuwe Wachtwoord" name="passwordconfirm" autofocus required>
                                </div>
                                <div class="col-1">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-12 mx-auto">
                            <div class="row">
                                <div class="col-1 text-white">
                                    <label for="password">&nbsp;</label>
                                </div>
                                <div class="col-5">
                                    <input class="w-100 btn green py-1" type="submit" value="Login">
                                </div>
                                <div class="col-6">
                                    
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