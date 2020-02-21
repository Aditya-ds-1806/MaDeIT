<?php require_once dirname(__DIR__, 1) . '/vendor/autoload.php' ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('views'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php echo $twig->render('/partials/header.twig', ['route' => 'people']); ?>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig'); ?>
    <section class="container">
        <header class="container-fluid d-inline-block text-center mt-5">
            <h1>Tenders</h1>
            <p class="w-100 w-md-75 w-lg-50 mx-auto mt-4">Developing Excellent concepts that are manufacturable and meet your business requirements.
            </p>
        </header>
        <div class="container-fluid my-5 text-center">
            <ul class="list-group list-group-flush text-left py-5">
                <li class="list-group-item bg-wild-sand pl-0 pt-4">
                    <h5>Workshop<span class="badge bg-sea-buckthorn text-white float-right">New</span></h5>
                    <p>Developing Excellent concepts that are manufacturable and meet your business requirements.
                    </p>
                </li>
                <li class="list-group-item bg-wild-sand pl-0 pt-4">
                    <h5>Workshop<span class="badge bg-sea-buckthorn text-white float-right">New</span></h5>
                    <p>Developing Excellent concepts that are manufacturable and meet your business requirements.
                    </p>
                </li>
                <li class="list-group-item bg-wild-sand pl-0 pt-4">
                    <h5>Workshop</h5>
                    <p>Developing Excellent concepts that are manufacturable and meet your business requirements.
                    </p>
                </li>
                <li class="list-group-item bg-wild-sand pl-0 pt-4">
                    <h5>Workshop</h5>
                    <p>Developing Excellent concepts that are manufacturable and meet your business requirements.
                    </p>
                </li>
            </ul>
            <a href="/news" class="btn btn-outline-emperor px-sm-4 py-sm-2 mx-auto">View more</a>
        </div>
    </section>


    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>