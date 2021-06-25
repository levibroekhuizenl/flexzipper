<?php
session_start();
if($_SESSION['loggedin'] == true){
  $session = true;
}else{
        session_destroy();
        $session = false;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
   <script>tinymce.init({ selector: '#mytextarea'});</script>
  <link rel='stylesheet' href='../assets/new.css'>
    <link rel='stylesheet' href='../assets/new.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel='stylesheet' href='../../view/assets/index.css'>
  <title>Flexzipper - Home</title>
</head>
<body>
  <?php include '../../view/header.php' ?>
  <div  class="container   bgc"> 
  <div class ="row justify-content-center"> 


  <form action="ctrl.filehandler.php" method="post" id="theform">
      <h4> neven activiteiten </h4> 
      <div class="col-6 ">  
      <label for="functie">functie</label>
        <input type="text" name="fileName" placeholder="File Name" value="">

        <label for="fileName">begin periode</label><br>
        <input type="date" name="fileName" placeholder="File Name" value="">
      
        </div>
      
        <div class="col-6 ">  
        <label for="fileName">werkgever</label>
        <input type="text" name="fileName" placeholder="File Name" value="">
            
        <label for="fileName">plaats</label>
        <input type="text" name="fileName" placeholder="File Name" value="">

              
        <label for="fileName">eind periode</label><br>
        <input type="date" name="fileName" placeholder="File Name" value="">
        
        </div>
        <br>  
            
 
     
        <form action="ctrl.filehandler.php" method="post" id="theform">
        <label for="fileContent">beschrijving</label>
        <textarea id="mytextarea" rows="4" cols="50" name="fileContent"></textarea>
        <br>  
        <a class="nav-link align" href="../../index.php">volgende </a>
        </form>
        

</div> 
       
</div>  


  

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

