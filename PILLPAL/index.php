<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PillPal</title>
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
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="pillpal.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Never miss a dose</span>
                            <span class="section-heading-lower">PillPal</span>
                        </h2>
                        <p class="mb-3">An automated medication dispenser that lets you focus on what matters most in life, removing the stress and tension of worrying about managing pills – or nagging over them. <br>
• Deliver medication on time, as scheduled <br>

• Face recognition verification <br>

• Record when doses are taken or missed<br>

• Alert your care circle when doses are missed</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="features.php">Key features and benefits!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Why</span>
                                <span class="section-heading-lower">PillPal</span>
                            </h2>
                            <p class="mb-0">Poll shows that almost 52% of people forget to take their medication, this number increases exponentially among the old (77.5%). As a growing elder population looks for better ways to manage their medication and monitor their treatments, we thought of providing a solution that can perform these tasks, as well as keep in touch with doctors, caregivers, and family members, hence PillPal. </p>
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




