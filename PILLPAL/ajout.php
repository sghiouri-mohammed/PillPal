<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/logo.jpeg">
    <link rel="stylesheet" href="assets/css/styles1.css?v=<?php echo time(); ?>">
    <title>PillPal</title>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
    
</head>
<body>

    <div class="container1">
    <button id="togg1" class="button" onclick="location.href = 'form1.php'"> Monday </button>
    <button id="togg2" class="button" onclick="location.href = 'form2.php'"> Tuesday</button>
    <button id="togg3" class="button" onclick="location.href = 'form3.php'"> wednesday </button>
    <button id="togg4" class="button" onclick="location.href = 'form4.php'"> Thursday </button>
    <button id="togg5" class="button" onclick="location.href = 'form5.php'"> Friday</button>
    <button id="togg6" class="button" onclick="location.href = 'form6.php'"> Saturday</button>
    <button id="togg7" class="button" onclick="location.href = 'form7.php'"> Sunday </button>  
   

    
</body>
</html>