<?php require_once dirname(__DIR__, 1) . '/vendor/autoload.php' ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('views'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php
echo $twig->render('/partials/header.twig', ['route' => 'index']);
$startups = file_get_contents('json/startups.json', true);
$startups = json_decode($startups, true);
?>

<style>
    a.btn-outline-mountain-meadow.active {
        color: #FFF;
        background-color: rgb(20, 167, 157);
    }
</style>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig') ?>
    <!-- 4. What we have built -->
    <section class="container-fluid bg-wild-sand text-center p-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">
                <h1>What we have built</h1>
                <p class="w-100 w-md-75 w-lg-50 mx-auto mt-4">Developing excellent concepts that are manufacturable and meet your business
                    requirements.</p>
                <ul class="nav nav-pills justify-content-center my-5" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="btn btn-outline-mountain-meadow active px-sm-4 py-sm-2 mx-4 my-2" id="category-1" data-toggle="pill" href="#category-1-tab" role="tab">Category 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 mx-4 my-2" id="category-2" data-toggle="pill" href="#category-2-tab" role="tab">Category 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 mx-4 my-2" id="category-3" data-toggle="pill" href="#category-3-tab" role="tab">Category 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 mx-4 my-2" id="category-4" data-toggle="pill" href="#category-4-tab" role="tab">Category 4</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="container text-left pb-5">
            <!-- Add template here -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="category-1-tab" role="tabpanel">
                    <?php echo $twig->render('/partials/startup-card.twig', ['startups' => $startups, 'tag' => 'Category 1']) ?>
                </div>
                <div class="tab-pane fade" id="category-2-tab" role="tabpanel">
                    <?php echo $twig->render('/partials/startup-card.twig', ['startups' => $startups, 'tag' => 'Category 2']) ?>
                </div>
                <div class="tab-pane fade show" id="category-3-tab" role="tabpanel">
                    <?php echo $twig->render('/partials/startup-card.twig', ['startups' => $startups, 'tag' => 'Category 3']) ?>
                </div>
                <div class="tab-pane fade" id="category-4-tab" role="tabpanel">
                    <?php echo $twig->render('/partials/startup-card.twig', ['startups' => $startups, 'tag' => 'Category 4']) ?>
                </div>
            </div>
        </div>
    </section>
    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>