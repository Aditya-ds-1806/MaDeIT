<?php require_once dirname(__DIR__, 1) . '/vendor/autoload.php' ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('views'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php
echo $twig->render('/partials/header.twig', ['route' => 'people']);
$tender = file_get_contents('json/tender.json', true);
$tender = json_decode($tender, true);
?>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig'); ?>
    <section class="container">
        <header class="container-fluid d-inline-block text-center mt-5">
            <h1 class="pt-5">Tenders</h1>
        </header>
        <div class="container-fluid mb-5 pb-5 text-center">
            <?php echo $twig->render('/partials/tender.twig', ['tender' => $tender]); ?>
        </div>
    </section>


    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>