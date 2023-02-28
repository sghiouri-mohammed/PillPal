
<?php session_start();?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="icon" href="logo.png">
        <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />

        <title>PillPal</title>
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">PillPal</span>
                <span class="site-heading-lower">Healthier, together</span>
            </h1>
        </header>
         <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            
        </nav>



        <div class="notification" >Welcome back  <?php echo  $_SESSION['Nom']." " .$_SESSION['Prenom'] ; ?></span>

        </div>
        <section class="clock container ">
            <div class="row">
                <div class="col-sm bg-faded m-5 p-2">
                            <h3 class="text-center p-2">Complete your profile</h3>
                            <p class="p-2">Completing your profile helps us know you better</p>
                            <a href="completeprofile.php" class="btn btn-primary">Click here</a>
                            <h3 class="text-center p-2">Logout</h3>
                            <a href="logout.php" class="btn btn-primary">Click here</a>
                            
    </div>
    <div class="col-sm bg-faded m-5 p-2">
      <h3 class="text-center p-2">Set your medication schedule</h3>
                            <p class="p-2">Create your weekly medication reminder</p>
                            <a href="ajout.php" class="btn btn-primary">Click here</a>
                            <p class="p-2">Check your schedule</p>
                            <a href="affich.php" class="btn btn-primary">Click here</a>
    </div>
            <div class="clock__container grid col-sm">
                <div class="clock__content grid">
                    <div class="clock__circle">
                        <span class="clock__twelve"></span>
                        <span class="clock__three"></span>
                        <span class="clock__six"></span>
                        <span class="clock__nine"></span>
    
                        <div class="clock__rounder"></div>
                        <div class="clock__hour" id="clock-hour"></div>
                        <div class="clock__minutes" id="clock-minutes"></div>
                        <div class="clock__seconds" id="clock-seconds"></div>

                        
                    </div>

                    <div>
                        <div class="clock__text">
                            <div class="clock__text-hour" id="text-hour"></div>
                            <div class="clock__text-minutes" id="text-minutes"></div>
                            <div class="clock__text-ampm" id="text-ampm"></div>
                        </div>
    
                        <div class="clock__date">>
                            <span id="date-day"></span>
                            <span id="date-month"></span>
                            <span id="date-year"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="assets/js/main.js"></script>
    </body>
</html>