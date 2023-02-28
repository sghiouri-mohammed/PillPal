<?php
session_start();
header('Content-Type: text/csv;');
header('Content-Disposition: attachement; filename="Meds.csv"');
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
?>"Days";"FirstTime";"SecondTime";"ThirdTime";"FourthTime"<?php
    $req1 = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Lundi'");
    $req1->execute();
    $table1=$req1->fetchAll();
    foreach ($table1 as $j){
        echo "\n".'"'.$j['WeekDays'].'";"'.$j['FirstTime'].'";"'.$j['SecondTime'].'";"'.$j['ThirdTime'].'";"'.$j['FourthTime'].'"';
    }
    $req2 = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Mardi'");
    $req2->execute();
    $table2=$req2->fetchAll();
    foreach ( $table2 as $j ){
        echo "\n".'"'.$j['WeekDays'].'";"'.$j['FirstTime'].'";"'.$j['SecondTime'].'";"'.$j['ThirdTime'].'";"'.$j['FourthTime'].'"';
    }
    $req3 = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Mercredi'");
    $req3->execute();
    $table3=$req3->fetchAll();
    foreach ( $table3 as $j ){
        echo "\n".'"'.$j['WeekDays'].'";"'.$j['FirstTime'].'";"'.$j['SecondTime'].'";"'.$j['ThirdTime'].'";"'.$j['FourthTime'].'"';
    }
    $req4 = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Jeudi'");
    $req4->execute(array());
    $table4=$req4->fetchAll();
    foreach ( $table4 as $j ){
        echo "\n".'"'.$j['WeekDays'].'";"'.$j['FirstTime'].'";"'.$j['SecondTime'].'";"'.$j['ThirdTime'].'";"'.$j['FourthTime'].'"';
    }
    $req5 = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Vendredi'");
    $req5->execute(array());
    $table5=$req5->fetchAll();
    foreach ( $table5 as $j ){
        echo "\n".'"'.$j['WeekDays'].'";"'.$j['FirstTime'].'";"'.$j['SecondTime'].'";"'.$j['ThirdTime'].'";"'.$j['FourthTime'].'"';
    }
    $req6 = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Samedi'");
    $req6->execute(array());
    $table6=$req6->fetchAll();
    foreach ( $table6 as $j ){
        echo "\n".'"'.$j['WeekDays'].'";"'.$j['FirstTime'].'";"'.$j['SecondTime'].'";"'.$j['ThirdTime'].'";"'.$j['FourthTime'].'"';
    }
    $req7 = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Dimanche'");
    $req7->execute(array());
    $table7=$req7->fetchAll();
    foreach ( $table7 as $j ){
        echo "\n".'"'.$j['WeekDays'].'";"'.$j['FirstTime'].'";"'.$j['SecondTime'].'";"'.$j['ThirdTime'].'";"'.$j['FourthTime'].'"';
    }
    ?>