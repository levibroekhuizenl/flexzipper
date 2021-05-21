<?php
// require 'content.php';

?>

<html>
	<head>
	</head>

	<body>
		<div class="row blue center">
        <div class="col-9">
        <h1 class='left'>Diensten</h1>
    <form action='../controller/productsController.php' method='post' id='theform' name='handleData'>
        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Naam van dienst</label>
            </div>
            <div class="col-9 col-s-12">
                <input type="text" name='service_name' value='naam' required autofocus>
            </div>
        </div>

        <div class="row">
            <div class="col-3 col-s-12">
                <label for="genre">Genre</label>
            </div>
            <div class="col-9 col-s-12">
                <select type="text" name="service_genre" required autofocus>
                    <option value="Horeca">Horeca</option>
                    <option value="Autos">Autos</option>
                    <option value="Economie">Economie</option>
                    <option value="ICT">ICT</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Status</label>
            </div>
            <div class="col-9 col-s-12">
                <select type="text" name="service_status" required autofocus>
                    <option value="Beschikbaar">Beschikbaar</option>
                    <option value="In behandeling">In behandeling</option>
                    <option value="Gesloten">Gesloten</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Details</label>
            </div>
            <div class="col-9 col-s-12">
                <textarea id="mytextarea" name="service_details">service_details</textarea>
            </div>
        </div>       
        <div class="row">
            <div class="col-6 col-s-12">
                <button id='button' type='button' name='todo' value='create' onClick="loadPage('controller/productsController.php?todo=create', sendToContent);">Create</button>
            </div>
            <div id='content'>
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
?>
<script>
  console.log("Width: " + screen.width);
  console.log("Height: " + screen.height);

  function loadPage(href, callback) {
    tinyMCE.triggerSave();
    var form = document.getElementById('theform');
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest(); // Usual mix-and-matching for x-browser omitted for brevity
    xhr.onload = function() {
        // readyState 4 means the request is done, If the HTTP request has completed
        // status 200 is a successful return, If the HTTP response code is 200 (e.g. successful)
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('spinner').style.display = 'none';
            callback(this); // Retrieve the response text
        }
        // An error occurred during the request.
    };
    xhr.open("POST", href, true);
    xhr.send(formData);
}

function sendToContent(result){
    console.log(result);
    // 'This is the returned text.'
    // return document.getElementById("content").innerHTML = result;
    return document.getElementById("content").innerHTML = result.response;
}
</script>