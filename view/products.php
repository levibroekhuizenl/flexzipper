<?php
require 'header.php';
// require 'content.php';

?>

<html>
	<head>
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
        <div class="row">
            <div class="col-6 col-s-12">
                <button type='button' name='todo' value='read' onClick="loadPage('../controller/productsController.php?todo=read', sendToContent);">Read</button>
            </div>
            </div>
        </form>
        </div>   
	</body>
</html>

<?php

if(isset($product)){
	echo ($product);
}else {
	
}
require 'footer.php';
?>