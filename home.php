<?php
$title = "Home";
include "include/nav.include.php";
?>
<!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
<header>
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="content/homeVideo.mp4" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100" style="color: rgb(255,248,231);">
                <h1 class="display-3">"introductie"</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            </div>
        </div>
    </div>
</header>

<section class="my-5">
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Locaties
        </h1>

        <?php
        foreach((new Conn("SELECT id, name, description, img FROM location LIMIT 3"))->FetchAll() as $row){
            echo 
            '
            <div class="row">
                <div class="col-md-7">
                    <a href="chosenLocationTemplate.php">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="'.$row['img'].'" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>'.$row['name'].'</h3>
                    <p>'.$row['description'].'</p>
                    <a class="btn btn-primary" href="location.php?id='.$row['id'].'">Bekijk locatie</a>
                </div>
            </div>
            <hr>
            ';
        }
        ?>
        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <a href="locations.php" style="color: rgb(92, 139, 87);">Bekijk alle locaties</a>
        </ul>

    </div>
    <!-- /.container -->
</section>


<section class="my-5" id="overons" style="background-color: rgb(247, 247, 247); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Over ons</h2>
                    <p>U kent het misschien wel. Een leeg parkje waar niks leuks of moois te vinden is. Mischien zou het wel leuk zijn om daar een voetbalveldje te hebben staan of dat er op een bepaalde plek extra vuilnisbakken kunnen staan.
                        Wij bij MIRotterdam willen ervoor zorgen dat de burgers van Rotterdam hun mening hierover kunnen geven op een makkelijke en prikkelende manier.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>

<section class="my-5" id="contact">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Contact</h2>
                    <h4>Cent-R</h4>
                    <p>viegil.warnars@lightwell.eu<br>ip.wijnands@Rotterdam.nl<br>jb.dejongh@Rotterdam.nl<br>+31(0)643123173</p>
                    <button class="btn btn-default btn-lg">Get in Touch</button>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<?php include "include/jq.include.php" ?>