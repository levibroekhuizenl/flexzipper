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
  <form method='post' id='theform' name='handleData'>
  <ul>
      <li id='button' type='button' name='todo' value='create' onClick="loadPage('controller/productsController.php?todo=createform', sendToContent);"><a>Create</a></li>
      <li type='button' name='todo' value='read' onClick="loadPage('controller/productsController.php?todo=read', sendToContent);"><a>Read</a></li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
</ul>
</form>
</body>
</html>