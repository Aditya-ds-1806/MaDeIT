<?php require_once '../vendor/autoload.php'; ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('../views/'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php echo $twig->render('/partials/header.twig', ['route' => 'index']) ?>

<body>
    <!-- 1. Hero Div and Navbar -->
    <header class="container-fluid hero-image pt-4">
        <?php echo $twig->render('/partials/navbar.twig') ?>
        <div class="container hero-text">
            <h1 class="display-4">Believe. Design. Leap.</h1>
            <p class="d-block lead w-75 mx-auto my-3">MaDeIT is a Design Driven Technology Business Incubator to help startups</p>
            <a href="#story" class="btn btn-mountain-meadow text-white">Watch Our Story</a>
        </div>
        <div class="social position-absolute mr-5" style="right: 0; top: 42%">
            <a href="" target="_blank" class="text-white d-block mb-3"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="" target="_blank" class="text-white d-block my-3"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="" target="_blank" class="text-white d-block mb-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
        </div>
    </header>

    <!-- 2. Statistics -->
    <section class="container-fluid stats bg-sea-buckthorn text-white text-center p-5" id="story">
        <p class="w-50 mx-auto p-4">Developing excellent concepts that are manufacturable and meet your business
            requirements.</p>
        <div class="container">
            <div class="row mx-0">
                <div class="col-4">
                    <h1 class="display-3">11 +</h1>
                    <small>Lorem ipsum</small>
                </div>
                <div class="col-4">
                    <h1 class="display-3">11 +</h1>
                    <small>Lorem ipsum</small>
                </div>
                <div class="col-4">
                    <h1 class="display-3">11 +</h1>
                    <small>Lorem ipsum</small>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. About -->
    <section class="container text-center p-5" id="about">
        <h3 class="text-sea-buckthorn">OUR STORY</h3>
        <h1>About MaDeIT</h1>
        <p>MaDeIT Innovation Foundation is a non-profit Section 8 company under the Companies Act, 2013. It is a
            design-driven Technology Business Incubator promoted by the Indian Institute of Information Technology
            Design and Manufacturing Kancheepuram, an institution of national importance fully funded by the Ministry of
            Human Resource Development, Govt. of India. MaDeIT Innovation Foundation is supported by a grant from the
            Department of Science and Technology (NSTEDB Division), Govt. of India. MaDeIT intends build on IIITDM's
            core capability (IT enabled Design and Manufacturing) to encourage design-driven startups, largely in the
            manufacturing, healthcare and transportation sectors. It will support startups from IIITDM's students,
            faculty and the wider ecosystem
        </p>
        <a href="people.php" class="btn btn-sea-buckthorn text-white">The people</a>
        <!-- insert carousel here -->
    </section>

    <!-- 4. What we have built -->
    <section class="container-fluid bg-wild-sand text-center p-5" id="portfolio">
        <header>
            <h1>What we have built</h1>
            <p class="w-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business
                requirements.</p>
            <div class="my-5">
                <button class="btn btn-outline-mountain-meadow px-5 py-3">Ongoing</button>
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

    <!-- 5. The Magic -->
    <section class="container-fluid px-0 py-5 my-5">
        <div class="row justify-content-end m-0">
            <h3 class="text-sea-buckthorn col-7 pl-5">THE MAGIC</h3>
        </div>
        <div class="row m-0">
            <div class="col-5 pl-0">
                <img src="https://picsum.photos/seed/picsum/850/550" class="img-fluid">
            </div>
            <div class="col-6 px-5">
                <h1>What MaDeIT is sample text</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0">Developing Excellent concepts that are manufacturable and meet your business requirements.
                    </li>
                    <li class="list-group-item pl-0">Availability of Design-Oriented Engineering interns (products of IIITDM's unique curriculum)
                    </li>
                    <li class="list-group-item pl-0">Access to Design studio with Rapid prototyping, Manufacturing and Measurement tools.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 6. Incubation Process -->
    <section class="container my-5 py-5">
        <h3 class="text-sea-buckthorn">INCUBATION PROCESS</h3>
        <h1 class="my-4">How does it happen?</h1>
        <p class="w-25">Developing excellent concepts that are manufacturable and meet your business</p>
        <div class="row row-cols-1 row-cols-md-3">
            <?php echo $twig->render('/partials/incubation-card.twig') ?>
        </div>
    </section>

    <!-- 7. Programmes -->
    <section class="container-fluid bg-wild-sand py-5" id="programmes">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-5">
                    <h1>Programmes</h1>
                    <p>Developing excellent concepts that are manufacturable and meet your business</p>
                    <button class="btn btn-mountain-meadow text-white">Know more</button>
                </div>
                <div class="col-7">
                    <div>
                        <?php echo $twig->render('/partials/program-cards.twig') ?>
                        <i class="fa fa-chevron-circle-left rounded-circle position-absolute text-mountain-meadow bg-white fa-3x"></i>
                        <i class="fa fa-chevron-circle-right rounded-circle position-absolute text-mountain-meadow bg-white fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. News and Events -->
    <section class="container-fluid text-center mx-auto my-3 py-5" id="news">
        <h1 class="my-4">News and Events</h1>
        <p class="w-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business</p>
        <?php echo $twig->render('/partials/news-card.twig') ?>
    </section>

    <!-- 9. Footer -->
    <?php echo $twig->render('/partials/footer.twig', ['route' => 'index']) ?>
</body>

</html>