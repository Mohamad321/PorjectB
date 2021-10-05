<?php
$title = "Location";
include "include/nav.include.php";
$RES = (new Conn("SELECT id, name, description, img FROM location WHERE id = ?"))->Fetch([$_GET['id']]);
if (!$RES) {
    header("Location: locations.php");
    die;
}
$_SESSION['LOCATION']['ID'] = $RES['id'];
$_SESSION['LOCATION']['NAME'] = $RES['name'];
?>
<div class="container border-0 shadow rounded-3 overflow-hidden" style="padding-bottom: 20px; margin-top: 2%">

    <!-- Portfolio Item Heading -->
    <h1 class="my-3"><?= $RES['name'] ?></h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-fluid" src="<?= $RES['img'] ?>" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Over deze locatie</h3>
            <p><?= $RES['description'] ?></p>
            <h3 class="my-3">Kies een thema</h3>
            <div class="row text-center">
                <div class="col thema">
                    <a href="edit.php?th=sport-en-spel">
                        <img class="img-fluid mb-2" src="https://icons-for-free.com/iconfiles/png/512/sport+icon-1320195208765240116.png">
                        <p>Sport & Spel</p>
                    </a>
                </div>
                <div class="col thema">
                    <a href="edit.php?th=groen">
                        <img class="img-fluid mb-2" src="https://thefarmersdairy.co.za/wp-content/uploads/2017/06/green-icon-cropped-700x700-padding-1.jpg">
                        <p>Groen</p>
                    </a>
                </div>

                <div class="col thema">
                    <a href="edit.php?th=veilig-en-schoon">
                        <img class="img-fluid mb-2" src="https://www.iconpacks.net/icons/2/free-safety-icon-3599-thumb.png">
                        <p>Veilig & Schoon</p>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<?php include "include/jq.include.php" ?>