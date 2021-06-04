<html>
<head>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li id='button' type='button' name='todo' value='create' onClick="loadPage('controller/productsController.php?todo=createform', sendToContent);">
               <a class="nav-link active" aria-current="page" href="#">Create</a></a>
        </li>
          <li type='button' name='todo' value='read' onClick="loadPage('controller/productsController.php?todo=read', sendToContent);">
            <a class="nav-link" href="#">Read</a>
        </li>
      </ul>
<form method='post' id='theform' name='handleData'>
        <input type='search' name='search' placeholder='search...'>
               <button type='button' name='todo' value='search' onClick="loadPage('controller/productsController.php?todo=search', sendToContent);"><a>Search</a></button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>






<!-- 

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
</html> -->