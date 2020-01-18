<?php require_once '../vendor/autoload.php'; ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('../views/'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php echo $twig->render('/partials/header.twig', ['route' => 'index']) ?>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig') ?>
    <!-- 4. What we have built -->
    <section class="container-fluid bg-wild-sand text-center p-5">
        <header>
            <h1>What we have built</h1>
            <p class="w-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business
                requirements.</p>
            <div class="my-5">
                <button class="btn btn-outline-mountain-meadow px-5 py-3">Ongoing</button>
                <button class="btn btn-mountain-meadow text-white px-5 py-3 ml-4">Ongoing</button>
                <button class="btn btn-mountain-meadow text-white px-5 py-3 ml-4">Ongoing</button>
                <button class="btn btn-mountain-meadow text-white px-5 py-3 ml-4">Ongoing</button>
            </div>
        </header>
        <div class="container text-left mb-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center">
                <!-- Add template here -->
                <?php echo $twig->render('/partials/startup-card.twig') ?>
            </div>
        </div>
        <a href="./portfolio.php" class="btn btn-outline-emperor px-5 py-3 mb-5">View more</a href="./portfolio.php">
    </section>
    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>