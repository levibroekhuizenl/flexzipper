<html>
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/style.css">
        <title>Mijn Account</title>
	</head>

	<body>
		<div class="row">
  <div class="col-3 menu">
    <ul>
      <li>The Flight</li>
      <li>The City</li>
      <li>The Island</li>
      <li><div>The Food</div></li>
    </ul>
  </div>  
  <div class="col-9">
 <form action='controller/productsController.php' method='post' id='theform' name='handleData' style="background-color: lightgray;">
<div class="row">
            <div class="col-3 col-s-12">
                <label for="">Name</label>
            </div>
            <div class="col-9 col-s-12">
                <input type="text" name='name' value='name' required autofocus>
            </div>
        </div>

        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Telefoonnummer</label>
            </div>
            <div class="col-9 col-s-12">
                <input type="text" name='phone' value='phone' required autofocus>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Email</label>
            </div>
            <div class="col-9 col-s-12">
                <input type="email" name='email' value='email' required autofocus>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Locatie</label>
            </div>
            <div class="col-9 col-s-12">
                <textarea id="mytextarea" name="location">
                    Details
                 </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-s-12">
                <button id='button' type='button' name='todo' value='create' onClick="loadPage('../controller/productsController.php?todo=create', sendToContent);">Create</button>
                <button type='button' name='todo' value='read' onClick="loadPage('../controller/productsController.php?todo=read', sendToContent);">Read</button>
            </div>
            <div class="col-6 col-s-12">
                <button id='button' type='button' name='todo' value='update' onClick="loadPage('../controller/productsController.php?todo=update', sendToContent);">Update</button>
                <button id='button' type='button' name='todo' value='delete' onClick="loadPage('../controller/productsController.php?todo=delete', sendToContent);">Delete</button>
            </div>
            </div>
        </form>
        </div>   
	</body>
</html>
