<?php require 'header.php'; ?>

    <form action='controller/ProductsController.php' method='post' id='theform' name='handleData' style="background-color: lightgray;">
        <div class="row">
            <div class="col-12 col-s-12">
                <input type="hidden" name='product_id' value='<?=$_REQUEST['product_id']?>' required autofocus>
            </div>
        </div>
        
        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Product name</label>
            </div>
            <div class="col-9 col-s-12">
                <input type="text" name='product_name' value='<?=$_REQUEST['product_name']?>' required autofocus>
            </div>
        </div>

        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Product price</label>
            </div>
            <div class="col-9 col-s-12">
                <input type="text" name='price' value='<?=$_REQUEST['price']?>' required autofocus>
            </div>
        </div>

        <div class="row">
            <div class="col-3 col-s-12">
                <label for="">Product details</label>
            </div>
            <div class="col-9 col-s-12">
                <textarea id="mytextarea" name="desc"><?=$_REQUEST['desc']?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-s-12">
                <button id='button' type='button' name='todo' value='update' onClick="loadPage('../controller/ProductsController.php?todo=update&id=', sendToContent);">Update</button>
            </div>
        </div>
    </form>

<?php require 'footer.php'; ?>