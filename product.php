<?php
        $products = [
        ["id"=>1,"pname"=>"Fastrack-Bag","price"=>500,"quality"=>5,"image"=>"imgs/bag2.jpg"],
        ["id"=>2,"pname"=>"Ray-Ban Goggles","price"=>600,"quality"=>5,"image"=>"imgs/goggle1.jpg"],
        ["id"=>3,"pname"=>"Hat","price"=>700,"quality"=>5,"image"=>"imgs/hat1.jpg"],
        ["id"=>4,"pname"=>"Hat","price"=>800,"quality"=>5,"image"=>"imgs/hat1.jpg"],
        ["id"=>5,"pname"=>"Ray-Ban Goggles","price"=>900,"quality"=>5,"image"=>"imgs/goggle1.jpg"],
        ["id"=>6,"pname"=>"Fastrack-Bag","price"=>500,"quality"=>5,"image"=>"imgs/bag2.jpg"]
        
    ];?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
   include("head.php");
   ?>
<title>Nav Page</title>
<script>
    $( window ).on( "load", function() {
       $("#product").addClass("active");

    });
</script>
</head>
<body>
<?php include('nav.php')?>
<section class="p-2"></section>
    <section class="container">
        <h1>Product Page</h1>
        <div class='row'>
        <?php 
         foreach($products as $val){
             ?>
             <div class='col-sm-4'>
             <div class="card" style="width: 18rem;">
                <img src="<?php echo $val['image'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-inline"><?php echo $val['id'];?>.</h5>
                    <h5 class="card-title d-inline"><?php echo $val['pname'];?></h5>
                    <p class="card-text d-block">
                     <h6 class="card-title d-inline">Price:<?php echo $val['price'];?></h6>
                     <h6 class="card-title d-inline float-right">No.:<?php echo $val['quality'];?></h6>
                    </p>
                    <a href="#" class="btn btn-primary">Add To Cart</a>
                </div>
                </div>
             </div>
        
            <?php

         }

        ?>
        </div>
    </section>
    <?php include('foot.php');
    include("script.php");
    ?>

</body>
</html>