<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://cdn.tiny.cloud/1/asg9lk3fby0j8myh4uii4vob7tgxmzczxy4mabkpxizd823r/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
  <link rel='stylesheet' href='view/assets/index.css'>
</head>
<body>
  <?php include 'view/header.php' ?>


  <p class='test'></p>

<?php include 'view/loading.php'; ?>
<div id='content'>
</div>
  

</body>
</html>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>