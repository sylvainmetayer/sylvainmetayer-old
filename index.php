<link type="text/plain" rel="author" href="//sylvainmetayer.fr/humans.txt" />

<?php require_once('partials/header.php'); ?>
<body>
<main>
    <?php require_once('partials/menu.php'); ?>

    <?php
        $divColor = "white-text center light-blue";
    ?>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">

                <?php require_once("partials/home.php"); ?>

                <?php require_once('partials/formation.php'); ?>

                <?php require_once("partials/competences.php"); ?>

                <?php require_once("partials/projets.php") ?>

                <?php require_once('partials/contact.php'); ?>

            </div>
        </div>
    </div>
</main>

<?php require_once("partials/footer.php"); ?>

</body>
</html>