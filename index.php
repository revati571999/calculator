<?php 
    // defining the profile details.
 $profiles = [
     ["image"=>"imgs/wc1.jpg","heading"=>"Olivia Emma","bio"=>"Daily affirmations have long been used to boost self-esteem. They compel people to start their days on the right foot. But while letting a smile be your umbrella might fortify your positive attitude, it’s not going to inspire your business ventures.","link"=>""],
     ["image"=>"imgs/mc1.jpg","heading"=>"Jocab Biden","bio"=>"To all the entrepreneurs and go-getters out there, these 30 inspiring business quotes are for you. Now, get out there and change the world—one project at a time!","link"=>""],
     ["image"=>"imgs/wc3.jpg","heading"=>"Amelia Mia","bio"=>"The brand that gave us “Just do it!” qualifies that tagline, which always felt a bit broad, to include boundaries. You can’t “just do it” without regard to the rules, as Knight clearly states. Those rules are what level the playing field and protect fair competition. But rules have nothing to do with the passion in which you play within them.","link"=>""],
     ["image"=>"imgs/wc2.jpg","heading"=>"James Benjamin","bio"=>"Branson’s Virgin has proven that from record labels to airlines, where there is a will there is a way. The door isn’t always open, but sometimes it’s ajar or the key is on the floor. All you must do is pick it up and turn the lock. Basically, the right environment for success ebbs and flows, but a keen businessperson is never passive.","link"=>""]
     
 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Nav Page</title>
<style>
    .carousel-caption {
    top: 35%;
    margin-right: 700px;
    margin-left: 0%;
  }
  .hr1 {
    width: 50%;
    height: 1px;
    margin-left: 0;
    margin-bottom: 0%;
  }
  .hr2 {
    width: 20%;
    height: 0.5px;
    margin-left: 0;
    margin-top: 1.5px;
  }
</style>
<script>
    $(document).ready(function(){
       $("#home").addClass("active");

    });
</script>
<?php
include("head.php");
?>
</head>
<body>
    <header>
    <?php
    include("nav.php");
    ?>
    </header>
    <section class="p-2"></section>
    <section class="container-fluid">
        <section class="row">

            <!-- carousel slide part starts -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 mb-3" src="imgs/1s.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block centered">
                            
                            <h1>NEW ARRIVALS</h1>
                            <p>SAVE <span class="text-sucess">20%</span> on all products</p>
                            <hr class="hr1 bg-dark">
                            <hr class="hr2 bg-dark">
                            <button class="btn btn-dark bg-dark">SHOP NOW <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 mb-3" src="imgs/na2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block centered">
                        <h1>NEW ARRIVALS</h1>
                        <p>SAVE <span class="text-sucess">20%</span> on all products</p>
                        <hr class="hr1 bg-dark">
                        <hr class="hr2 bg-dark">
                        <button class="btn btn-dark bg-dark">SHOP NOW <i class="fas fa-arrow-right"></i></button>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 mb-3" src="imgs/na3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block centered">
                        <h1>NEW ARRIVALS</h1>
                        <p>SAVE <span class="text-sucess">20%</span> on all products</p>
                        <hr class="hr1 bg-dark">
                        <hr class="hr2 bg-dark">
                        <button class="btn btn-dark bg-dark">SHOP NOW <i class="fas fa-arrow-right"></i></button>
                        
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- carousel slide part ends -->
        
    <?php 
        foreach($profiles as $val){
    ?>
    <div class="container">

        <div class="row g-0 bg-light position-relative">
            <div class="col-md-6 mb-md-0 p-md-4">
                <img src="<?php echo $val['image'];?>" class="w-100" alt="...">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <h2 class="mt-4"><?php echo $val['heading'];?></h2>
                <p class="mt-4"><?php echo $val['bio'];?></p>
                <button type="submit" class="btn btn-primary mb-3">Visit Profile</button>
            </div>
        </div>
        <section class="p-2"></section>
        <?php 
        };
        ?>
</div> 
</section>

    <footer>
        <?php
        include("foot.php");
        ?>
    </footer>
<?php
include("script.php");
?>
</body>
</html>