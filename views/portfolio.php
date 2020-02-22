<?php require_once dirname(__DIR__, 1) . '/vendor/autoload.php' ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('views'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php echo $twig->render('/partials/header.twig', ['route' => 'index']) ?>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig') ?>
    <!-- 4. What we have built -->
    <section class="container-fluid bg-wild-sand text-center p-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">

                <h1>What we have built</h1>
                <p class="w-100 w-md-75 w-lg-50 mx-auto mt-4">Developing excellent concepts that are manufacturable and meet your business
                    requirements.</p>
                <div class="my-5">
                    <button class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 mx-4 my-2">Ongoing</button>
                    <button class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 mx-4 my-2">Ongoing</button>
                    <button class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 mx-4 my-2">Ongoing</button>
                    <button class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 mx-4 my-2">Ongoing</button>
                </div>
            </div>
        </header>
        <div class="container text-left pb-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center">
                <!-- Add template here -->
                <?php echo $twig->render('/partials/startup-card.twig') ?>
            </div>
        </div>
        <a href="/portfolio" class="btn btn-outline-emperor px-sm-4 py-sm-2 mb-5">View more</a>
    </section>
    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>