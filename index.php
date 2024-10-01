<?php
include_once('includes/top.php');
if (!$aPreferences['slider']) {
    ?>
    <div class="container my-5">
        <div class="row align-items-center gy-4">
            <div class="col-md-6 text-center text-md-start">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil molestias architecto est adipisci assumenda a corrupti nesciunt maiores culpa ex, eveniet voluptas quo labore, expedita quia doloribus esse quaerat ad sit laboriosam minus reprehenderit. Laudantium impedit nisi culpa autem illo amet! Possimus recusandae aut rem totam eaque eos voluptatibus quas?
                </p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary">Primary button</a>
                    <a href="#" class="btn btn-secondary light">Secondary button</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?= $aSite['url'] ?>upload/img/hero1.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <?php
}
if ($aPreferences['sponsors']) {
    $aSponsors = fetch_rows($db_connection, 'SELECT * FROM sponsors;');
    ?>
    <div class="container">
        <div class="swiper sponsor-swiper">
            <div class="swiper-wrapper">
                <?php
                foreach($aSponsors as $aSponsor) {
                    ?>
                    <div class="swiper-slide">
                        <img src="<?= $aSite['url'].$aSponsor['path'] ?>" alt="<?= $aSponsor['name'] ?>">
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php include_once('includes/bottom.php'); ?>