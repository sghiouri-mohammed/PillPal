<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/styles1.css?v=<?php echo time(); ?>">
    <title>PillPal</title>
    <link rel="icon" href="logo.png">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="">
    
</head>
<body>

    <div class="container1">

    <button style="margin-left: 35%; margin-bottom:3%;" id="togg2" class="button" onclick="location.href = 'form2.php'"> Tuesday </button>
    

    <div class="parrent">

  
    <div  >
        <?php
            $_SESSION['day']= 'Tuesday';
            include('form.php');


        ?> 
    </div>  
</div>  
   
<button style="float:right;" id="togg2" class="button" onclick="location.href = 'form3.php'"> Wednesday &nbsp; -> </button>

    
</body>
</html>