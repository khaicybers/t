<?php //require_once "data/product-data.php" ?>
<?php //require_once "data/product-data.php" ?>
<?php
//    foreach ($products as $value){
//        echo $value;
//        echo "<br>";
//    }
//?>
<!--<h3>This is a product page</h3>-->

<?php
include 'header.php';
$products = require 'data/product-data.php';
?>
<div class="row">
<?php foreach($products as $pro){ ?>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="thumbnail text-center border">
            <img src="img/<?php echo $pro['image'];?>" alt="" width="30%">
            <div class="caption text-center">
                <h3><?php echo $pro['name'];?></h3>
                <p>
                    <b>Giá: <?php echo number_format($pro['price']);?> đ</b>
                </p>
                <p>
                    <a href="#" class="btn btn-xs btn-primary">View</a>
                    <a href="#" class="btn btn-xs btn-default">Add to Cart</a>
                </p>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<?php include 'footer.php';?>

