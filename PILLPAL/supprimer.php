<?php session_start(); ?>

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
    if (isset($_GET['WeekDays']))
    {
        $nome=$_GET['WeekDays'];
        $reqt=$dbco->prepare("DELETE FROM `meds` WHERE WeekDays=:value");
        $reqt->execute(array('value'=>$nome));
        $link = "<script>window.open('affich.php', '_self')</script>";
        echo $link;
    }
?>