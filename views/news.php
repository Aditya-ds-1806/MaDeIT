<?php require_once dirname(__DIR__, 1) . '/vendor/autoload.php' ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('views'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php
echo $twig->render('/partials/header.twig', ['route' => 'people']);
$events = file_get_contents('json/events.json', true);
$events = json_decode($events, true);
?>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig'); ?>
    <section class="container pt-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">
                <h1>News and Events</h1>
                <p class="w-100 w-md-75 w-lg-50 mx-auto mt-4">Developing Excellent concepts that are manufacturable and meet your business requirements.
                </p>
            </div>
        </header>
        <div class="container-fluid my-5 pb-5 text-center">
            <ul class="list-group list-group-flush text-left py-5">
                <?php
                for ($i = 0; $i < count($events); $i++) {
                    if ($events[$i]['isNew']) {
                        echo '<li class="list-group-item bg-wild-sand pl-0 pt-4">
                        <h5 class="text-sea-buckthorn">' . $events[$i]['title'] . '<span class="badge bg-sea-buckthorn text-white float-right">New</span>' . '</h5>
                        <p>' . $events[$i]['description'] . '</p>
                        </li>';
                    } else {
                        echo '<li class="list-group-item bg-wild-sand pl-0 pt-4">
                        <h5 class="text-sea-buckthorn">' . $events[$i]['title'] . '</h5>
                        <p>' . $events[$i]['description'] . '</p>
                        </li>';
                    }
                }
                ?>
            </ul>
        </div>
    </section>


    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>