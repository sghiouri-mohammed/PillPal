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

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="icon" href="assets/img/logo.jpeg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
        <link rel="stylesheet" href="assets/css/styles1.css?v=<?php echo time(); ?>">
        <title>PillPal</title>
    </head>
    <style>
        .container{
            background-color: #273349;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgb(12 16 31 / 40%);
            padding: 100px;
            margin: auto;
            width: 1000px;
        }
    </style>
    <body>
    
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Jours</th>
                        <th>1e dose</th>
                        <th>2e dose</th>
                        <th>3e dose</th>
                        <th>4e dose</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $req = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Lundi' ");
                        $req->execute();
                        $table_medcaments = $req->fetchAll();

                        foreach ($table_medcaments as $r){

                        echo '<tr class="priority-200">';
                        echo "<td>".$r['WeekDays']. "</td>";
                        echo "<td> ".$r['FirstTime']. " </td> ";
                        echo "<td> ".$r['SecondTime']. " </td> ";
                        echo "<td> ".$r['ThirdTime']. " </td> ";
                        echo "<td> ".$r['FourthTime']. " </td> ";

                        print('

                         <td>
                               <a href="supprimer.php?WeekDays='.$r['WeekDays'].'  ">  
                                  <button class="delete"><i class="fas fa-trash"></i></button>
                                 </a> 
                             </td>' 

                            
                        ) ;

                        echo "</tr>";
                    
                    }
                    ?>

<?php 
                        $req = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Mardi' ");
                        $req->execute();
                        $table_medcaments = $req->fetchAll();

                        foreach ($table_medcaments as $r){

                        echo '<tr class="priority-200">';
                        echo "<td>".$r['WeekDays']. "</td>";
                        echo "<td> ".$r['FirstTime']. " </td> ";
                        echo "<td> ".$r['SecondTime']. " </td> ";
                        echo "<td> ".$r['ThirdTime']. " </td> ";
                        echo "<td> ".$r['FourthTime']. " </td> ";
                        print('
                            <td>
                                <a href="supprimer.php?WeekDays='.$r['WeekDays'].'  ">  
                                    <button class="delete"><i class="fas fa-trash"></i></button>
                                    </a> 
                            </td>'    
                        ) ;

                        echo "</tr>";
                    
                    }
                    ?>

<?php 
                        $req = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Mercredi' ");
                        $req->execute();
                        $table_medcaments = $req->fetchAll();

                        foreach ($table_medcaments as $r){

                        echo '<tr class="priority-200">';
                        echo "<td>".$r['WeekDays']. "</td>";
                        echo "<td> ".$r['FirstTime']. " </td> ";
                        echo "<td> ".$r['SecondTime']. " </td> ";
                        echo "<td> ".$r['ThirdTime']. " </td> ";
                        echo "<td> ".$r['FourthTime']. " </td> ";
                    
                        print('

                         <td>
                               <a href="supprimer.php?WeekDays='.$r['WeekDays'].'  ">  
                                  <button class="delete"><i class="fas fa-trash"></i></button>
                                 </a> 
                             </td>' 

                            
                        ) ;

                        echo "</tr>";
                    
                    }
                    ?>

<?php 
                        $req = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Jeudi' ");
                        $req->execute();
                        $table_medcaments = $req->fetchAll();

                        foreach ($table_medcaments as $r){

                        echo '<tr class="priority-200">';
                        echo "<td>".$r['WeekDays']. "</td>";
                        echo "<td> ".$r['FirstTime']. " </td> ";
                        echo "<td> ".$r['SecondTime']. " </td> ";
                        echo "<td> ".$r['ThirdTime']. " </td> ";
                        echo "<td> ".$r['FourthTime']. " </td> ";
                    
                        print('

                         <td>
                               <a href="supprimer.php?WeekDays='.$r['WeekDays'].'  ">  
                                  <button class="delete"><i class="fas fa-trash"></i></button>
                                 </a> 
                             </td>' 

                            
                        ) ;



                        echo "</tr>";
                    
                    }
                    ?>

<?php 
                        $req = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Vendredi' ");
                        $req->execute();
                        $table_medcaments = $req->fetchAll();

                        foreach ($table_medcaments as $r){

                        echo '<tr class="priority-200">';
                        echo "<td>".$r['WeekDays']. "</td>";
                        echo "<td> ".$r['FirstTime']. " </td> ";
                        echo "<td> ".$r['SecondTime']. " </td> ";
                        echo "<td> ".$r['ThirdTime']. " </td> ";
                        echo "<td> ".$r['FourthTime']. " </td> ";
                    
                        print('

                         <td>
                               <a href="supprimer.php?WeekDays='.$r['WeekDays'].'  ">  
                                  <button class="delete"><i class="fas fa-trash"></i></button>
                                 </a> 
                             </td>' 

                            
                        ) ;

                        echo "</tr>";
                    
                    }
                    ?>

<?php 
                        $req = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Samedi' ");
                        $req->execute();
                        $table_medcaments = $req->fetchAll();

                        foreach ($table_medcaments as $r){

                        echo '<tr class="priority-200">';
                        echo "<td>".$r['WeekDays']. "</td>";
                        echo "<td> ".$r['FirstTime']. " </td> ";
                        echo "<td> ".$r['SecondTime']. " </td> ";
                        echo "<td> ".$r['ThirdTime']. " </td> ";
                        echo "<td> ".$r['FourthTime']. " </td> ";
                    
                        print('

                         <td>
                               <a href="supprimer.php?WeekDays='.$r['WeekDays'].'  ">  
                                  <button class="delete"><i class="fas fa-trash"></i></button>
                                 </a> 
                             </td>' 

                            
                        ) ;

                        echo "</tr>";
                    
                    }
                    ?>

<?php 
                        $req = $dbco->prepare("SELECT * FROM `meds` WHERE WeekDays='Dimanche' ");
                        $req->execute();
                        $table_medcaments = $req->fetchAll();

                        foreach ($table_medcaments as $r){

                        echo '<tr class="priority-200">';
                        echo "<td>".$r['WeekDays']. "</td>";
                        echo "<td> ".$r['FirstTime']. " </td> ";
                        echo "<td> ".$r['SecondTime']. " </td> ";
                        echo "<td> ".$r['ThirdTime']. " </td> ";
                        echo "<td> ".$r['FourthTime']. " </td> ";
                    
                        print('

                         <td>
                               <a href="modifier.php?WeekDays='.$r['WeekDays'].'  ">  
                                  <button class="delete"><i class="fas fa-trash"></i></button>
                                 </a> 
                             </td>' 

                            
                        ) ;


                        echo "</tr>";
                    
                    }
                    ?>
                </tbody>
            </table>
    <button style="float:left;" id="togg7" class="button" onclick="location.href = 'index.php'"> - Accéder au menu - </button> 
    <button style="float:right;" id="togg7" class="button" onclick="location.href = 'export.php'"> - Exporter le planning - </button>  


        </div>
        
    </body>
    </html>