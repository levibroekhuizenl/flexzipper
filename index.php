<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://cdn.tiny.cloud/1/asg9lk3fby0j8myh4uii4vob7tgxmzczxy4mabkpxizd823r/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
  <link rel='stylesheet' href='view/assets/style.css'>
</head>
<body>

<img id='spinner' src='spinner.gif'>

<div class="row">

  <p class='test'>
    
  </p>

  <div class="col-9">
 <form method='post' id='theform' name='handleData' style="background-color: lightgray;">
        <div class="row">
            <div class="col-6 col-s-12">
                <button id='button' type='button' name='todo' value='create' onClick="loadPage('controller/productsController.php?todo=createform', sendToContent);">Create</button>
                <button type='button' name='todo' value='read' onClick="loadPage('controller/productsController.php?todo=read', sendToContent);">Read</button>
            </div>
            <div id='content'>
            </div>
            </div>
        </form>
</div>
</div>
</div>

</body>
</html>
<script>
  console.log("Width: " + screen.width);
  console.log("Height: " + screen.height);

  function loadPage(href, callback) {
    tinyMCE.triggerSave();
    document.getElementById('spinner').style.display = 'block';
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