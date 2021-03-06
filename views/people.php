<?php require_once dirname(__DIR__, 1) . '/vendor/autoload.php' ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('views'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php
echo $twig->render('/partials/header.twig', ['route' => 'people']);
$people = file_get_contents('json/people.json', true);
$people = json_decode($people, true);
?>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig'); ?>
    <div class="container text-center mb-5 py-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">
                <h3 class="text-sea-buckthorn">BEHIND THE SCENES</h3>
                <h1>The People</h1>
                <p class="w-100 w-md-75 w-lg-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business requirements.
                </p>
            </div>
        </header>
        <div class="row row-cols-1 row-cols-lg-2 my-5 py-5">
            <?php
            for ($i = 0; $i < count($people['directors']); $i++) {
                echo    '<div class="col my-3 my-lg-0">
                            <div class="card border-0 px-1 py-3 p-sm-5 mx-2 ml-lg-3 ml-xl-5 shadow h-100">
                                <img src="' . $people['directors'][$i]['image'] . '" class="card-img-top rounded-circle img-fluid w-50 mx-auto" alt="' . $people['directors'][$i]['name'] . '">
                                <div class="card-body">
                                    <h6 class="card-title">' . $people['directors'][$i]['name'] . '</h6>
                                    <p class="card-text text-left">' . $people['directors'][$i]['description'] . '</p>
                                </div>
                                <div class="card-footer social text-center bg-white border-0">
                                    <a href="" target="_blank" class="text-sea-buckthorn fa-lg pr-3"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="" target="_blank" class="text-sea-buckthorn fa-lg border-left border-secondary px-3"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>';
            }
            ?>
        </div>
        <h1>Strategic Advsiory Board</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center my-5">
            <?php echo $twig->render('/partials/people-card.twig', ['people' => $people['advisoryBoard']]); ?>
        </div>
    </div>

    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>