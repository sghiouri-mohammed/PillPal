<?php

    $servname = 'localhost';
    $dbname = 'pillpal';
    $user = 'root';
    $pass = '';

    try{
        $dbco = new PDO("mysql:host=$servname;dbname=pillpal", $user, '');
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

    

    if ((!empty($_GET['Name'])) && (!empty($_GET['Nombre'])) && (!empty($_GET['Periode'])) && (!empty($_GET['first'])))
    {
        $nom = $_GET['Name'];
        $nombre = $_GET['Nombre'];
        $periode = $_GET['Periode'];
        $times = $_GET['first'];
        $_SESSION['MedicamentName']=$_GET['Name'];


        $hed = $dbco->prepare("INSERT INTO `medicaments`(`Name`, `Nombre`, `Periode`, `Heure`) VALUES  (?,?,?,?)");
        $hed->execute(array($nom,$nombre,$periode,$times));



    }
    

?>