<?php
$title = "Locations";
include "include/nav.include.php";
?>
<div class="container border-0 shadow rounded-3 overflow-hidden" style="padding-bottom: 20px; margin-top: 2%">
    <h1 class="my-4">Locaties</h1>
    <?php
    foreach ((new Conn("SELECT id, name, description, img FROM location"))->FetchAll() as $row) {
        echo
        '
            <div class="row">
                <div class="col-md-7">
                    <a href="chosenLocationTemplate.php">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="' . $row['img'] . '" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>' . $row['name'] . '</h3>
                    <p>' . $row['description'] . '</p>
                    <a class="btn btn-primary" href="location.php?id=' . $row['id'] . '">Bekijk locatie</a>
                </div>
            </div>
            <hr>
            ';
    }
    ?>

</div>
<?php include "include/jq.include.php" ?>