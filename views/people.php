<?php require_once dirname(__DIR__, 1) . '\vendor\autoload.php' ?>
<?php $loader = new \Twig\Loader\FilesystemLoader('views'); ?>
<?php $twig = new \Twig\Environment($loader); ?>

<?php echo $twig->render('/partials/header.twig', ['route' => 'people']); ?>

<body class="bg-wild-sand">
    <?php echo $twig->render('/partials/navbar.twig'); ?>
    <div class="container text-center mb-5 py-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <h3 class="text-sea-buckthorn">BEHIND THE SCENES</h3>
            <h1>The People</h1>
            <p class="w-100 w-md-75 w-lg-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business requirements.
            </p>
        </header>
        <div class="row row-cols-1 row-cols-lg-2 my-5 py-5">
            <div class="col my-3 my-lg-0">
                <div class="card border-0 px-1 py-3 p-sm-5 mx-2 mr-lg-3 mr-xl-5 shadow h-100">
                    <img src="/public/images/banshidhar_majhi.jpg" class="card-img-top rounded-circle img-fluid w-50 mx-auto" alt="Prof. Banshidhar Majhi">
                    <div class="card-body">
                        <h6 class="card-title">Prof. Banshidhar Majhi</h6>
                        <p class="card-text text-left">Prof. Banshidhar Majhi is the <strong>Director of IIITDM Kancheepuram</strong>. He has 26+ years of experience cutting across academics, administration and the IT industry. His expertise is in the area of Image processing, Data Compression, Cryptography and Security, Parallel Computing and Soft Computing. Prof. Majhi has published close to 70 publications and has received several medals and awards. Prior to IIITDM, Prof. Majhi had a long association with NIT Rourkela.
                        </p>
                    </div>
                    <div class="card-footer social text-left bg-white border-0">
                        <a href="" target="_blank" class="text-sea-buckthorn fa-lg pr-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="" target="_blank" class="text-sea-buckthorn fa-lg border-left border-secondary px-3"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
            <div class="col my-3 my-lg-0">
                <div class="card border-0 px-1 py-3 p-sm-5 mx-2 ml-lg-3 ml-xl-5 shadow h-100">
                    <img src="/public/images/sudhir.jpeg" class="card-img-top rounded-circle img-fluid w-50 mx-auto" alt="Dr. Sudhir Varadarajan">
                    <div class="card-body">
                        <h6 class="card-title">Dr. Sudhir Varadarajan</h6>
                        <p class="card-text text-left">Dr. Varadarajan is the <strong>Dean (Design, Innovation & Incubation)</strong> at IIITDM Kancheepuram. He has 22+ years of experience in design & innovation management in the IT industry. He has strong expertise in management and IT consulting, and rich and varied experience in R&D, practice development, strategic marketing and consulting to Fortune 500 Clients. He is also the author of a book titled <strong>Managing Nothing: A narrative inquiry into innovation and leadership in the IT industry (2015)</strong>.
                        </p>
                    </div>
                    <div class="card-footer social text-left bg-white border-0">
                        <a href="" target="_blank" class="text-sea-buckthorn fa-lg pr-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="" target="_blank" class="text-sea-buckthorn fa-lg border-left border-secondary px-3"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <h1>Strategic Advsiory Board</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-5">
            <?php echo $twig->render('/partials/people-card.twig') ?>
        </div>
    </div>

    <?php echo $twig->render('/partials/footer.twig'); ?>
</body>

</html>