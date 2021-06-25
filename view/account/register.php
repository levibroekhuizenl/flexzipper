<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Mijn Account</title>
</head>
<body>

    <section id="login" class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <form action="./registeraccount.php" class="">
                    <div class="row pb-5">
                        <div class="col-12 col-lg-6 text-white mx-auto">
                            <h2 class="center">Registreren</h2>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-12 col-lg-6 mx-auto">
                            <div class="row">
                                <div class="col-2 text-white">

                                </div>
                                <div class="col-8 col-md-6 col-lg-6">
                                    <input class="w-100" type="text" name="schoolnumber" placeholder="Leerlingnummer" id="schoolnumber" autofocus required>
                                </div>
                                <div class="col-2 text-white">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-12 col-lg-6 mx-auto">
                            <div class="row">
                                <div class="col-2 text-white">
                                    
                                </div>
                                <div class="col-8 col-md-6 col-lg-6">
                                    <input class="w-100" type="text" name="firstname" placeholder="Voornaam" id="firstname" autofocus required>
                                </div>
                                <div class="col-2 text-white">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-12 col-lg-6 mx-auto">
                            <div class="row">
                                <div class="col-2 text-white">
                                    
                                </div>
                                <div class="col-8 col-md-6 col-lg-6">
                                    <input class="w-100" type="text" name="lastname" placeholder="Achternaam" id="lastname" required>
                                </div>
                                <div class="col-2 text-white">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-12 col-lg-6 mx-auto">
                            <div class="row">
                                <div class="col-2">
                                    
                                </div>
                                <div class="col-8 col-md-6 col-lg-6">
                                    <input class="w-100" type="email" name="email" placeholder="E-mailadres" id="email" required>
                                </div>
                                <div class="col-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-12 col-lg-6 mx-auto">
                            <div class="row">
                                <div class="col-2">
                                   
                                </div>
                                <div class="col-8 col-md-6 col-lg-6">
                                    <input class="w-100" type="password" name="password" placeholder="Wachtwoord" id="password" required>
                                </div>
                                <div class="col-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-12 col-lg-6 mx-auto">
                            <div class="row">
                                <div class="col-2 text-white">
                                    
                                </div>
                                <div class="col-8 col-md-6 col-lg-6">
                                    <input class="w-100" type="password" name="passwordconfirm" placeholder="Bevestig Wachtwoord" id="passwordconfirm" required>
                                </div>
                                <div class="col-2 text-white">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-md-3">
                        <div class="col-12 mx-auto">
                            <div class="row">
                                <div class="col-2 text-white">
                                    <label for="password">&nbsp;</label>
                                </div>
                                <div class="col-8">
                                    <input class="w-100 btn green py-1" class="align-items-center" type="submit" value="Registreer">
                                </div>
                                <div class="col-2">
                                    
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