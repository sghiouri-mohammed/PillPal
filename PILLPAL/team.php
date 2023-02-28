<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PillPal</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <link rel="icon" href="logo.png">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">PillPal</span>
                <span class="site-heading-lower">Healthier, together</span>
            </h1>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">PillPal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="features.php">Key features</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="team.php">Team</a></li>


                         <?php
                                    if ((!empty($_SESSION['Nom'])) && (!empty($_SESSION['Prenom'])))
                                    {
                                        echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="dashboard.php">'.$_SESSION['Nom']." ".$_SESSION['Prenom'].'</a></li>';
                                          
                                    }
                                    else
                                    {
                                        echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="log.php">Login</a></li>';
                                    }
                                ?>

                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="team.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-7 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Behind PillPal</span>
                                    <span class="section-heading-lower">Meet the team</span>
                                </h2>
                                <p>
                                    <em>from left to right</em><br><br>
                                    Youssef Tairi<br>
                                    Aya Beriane <br>
                                    Loubna El Attar <br>
                                    Amina Kalyati<br>
                                    Mohammed Sghiouri<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; 2022 | PillPal</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

