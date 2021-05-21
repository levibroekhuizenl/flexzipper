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
  <link rel='stylesheet' href='assets/style.css'>
</head>
<body>
<div class="header">  
  <ul class="sidenav">
 <form method='post' id='theform' name='handleData'>
        <div class="row">
                <li id='button' type='button' name='todo' value='create' onClick="loadPage('controller/productsController.php?todo=createform', sendToContent);"><a>Create</a></li>
                <li type='button' name='todo' value='read' onClick="loadPage('controller/productsController.php?todo=read', sendToContent);"><a>Read</a></li>
                <li><input type='text' name='search' placeholder='search...'></li>
                <li type='button' name='todo' value='search' onClick="loadPage('controller/productsController.php?todo=search', sendToContent);"><a>Search</a></li>
            </div>
            <div id='content'>
            </div>
            </div>
        </form>

  </ul>
</body>
</html>