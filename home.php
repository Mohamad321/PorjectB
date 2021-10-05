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
            <div class="w-100" style="color: rgb(92, 139, 87);">
            <!-- <h1 class="display-3">MiRotterdam</h1> -->
            </div>
        </div>
        </div>
        </header>

        <section class="my-5">
        <div class="container">

            <!-- Page Heading -->
            <h1 class="my-4">Locaties
            </h1>

            <!-- Project One -->
            <div class="row">
            <div class="col-md-7">
                <a href="chosenLocationTemplate.php">
                <img class="img-fluid rounded mb-3 mb-md-0" src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2l0eXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Locatie 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="chosenLocationTemplate.php">Bekijk locatie</a>
            </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Project Two -->
            <div class="row">
            <div class="col-md-7">
                <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Locatie 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
                <a class="btn btn-primary" href="locations.php">Bekijk locatie</a>
            </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Project Three -->
            <div class="row">
            <div class="col-md-7">
                <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="https://cdn.vox-cdn.com/thumbor/Ksi3v8e1tj1ZcQeRV1ZtmCYIM7k=/0x0:4284x2916/1200x800/filters:focal(1800x1116:2484x1800)/cdn.vox-cdn.com/uploads/chorus_image/image/61918529/NorthBroadSt_Landscape_1_M.Edlow.0.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Locatie 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
                <a class="btn btn-primary" href="locations.php">Bekijk locatie</a>
            </div>
            </div>
            <!-- /.row -->

            <hr>

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
            <h4>Lorem ipsum..</h4>
            <p>Lorem ipsum..</p>
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
    </body>
</html>