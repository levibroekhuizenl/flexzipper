<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio Maken</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/da2bd4a187.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="assets/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body class="bg-primary">
<!--Welcome Section-->

    <style>
        .logo{
            width: 10%;
            height: 10%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        h1{
            text-align: center;
            font-size: 32px;
        }

        .midden{
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h2{
            float: right;
            color: white;
        }

        .for{
            background-color:#2e63a3;
            color:white;
            padding:20px;
        }
        a{
            color:white;
            float:right;
        }
    </style>


<!--- Text Section -->
<div class="container padding pt-5">
    <div class="row padding text-center">
        <div class="col-lg-12">
        
    </div>
</div>

<h2>Mijn Account</h2>


<img class="logo" src="../../img/logo.png">

<br><br><br>

<div class="for">
 	<h1 >Begin met jou <br> portfolio te creeren</h1><br>

     <form>
        <label class="midden" for="cars">Kies jou opleiding:</label>
        <select class="midden" id="cars" name="carlist" form="carform">
        <option  class="midden" >Applicatie en mediaontwikkelaar (Niveau 4)</option>
        <option  class="midden" >Medewerker ICT Support (Niveau 2)</option>
        <option  class="midden" >Expert IT systems and devices (Niveau 4)</option>
        <option  class="midden" >ICT Beheerder (Niveau 4)</option>
        </select>

        <br>
        <P class="midden">Styling, Interieur, Interior</P>
        <label class="midden" >Kies In welke vakgebieden jij goed in bent:</label> 
        <select class="midden" id="form"  form="form">
        <option  class="midden" >ICT</option>
        <option  class="midden" >Bouw</option>
        <option  class="midden" >Zorg en Welzijn</option>
        <option  class="midden" >Sport</option>
        </select>
        <br>

        <label class="midden" >Kies In welke basisvakken jij goed in bent:</label>
        <select class="midden" id="form"  form="form">
        <option  class="midden" >Nederlands</option>
        <option  class="midden" >Engels</option>
        <option  class="midden" >Rekenen</option>
        <option  class="midden" >Wiskunde</option>
    </select> 
    
        
        <a  href="./ervaringform.php">volgende</a>
        <br>
        
</div> 





</body>
</html>