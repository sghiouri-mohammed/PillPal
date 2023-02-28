<?php 
    try 
    {
        $conn=new PDO("mysql:host=localhost;dbname=pillpal",'root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        echo "connection failed : ".$error->getMessage() ."<br/>";
    }

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/ECSA.png" type="image/x-icon">
        <link rel="stylesheet" href="css/styleda.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="icon" href="logo.png">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
</head>
<style>
    body{
    padding: 30px;
    padding-left:150px ;
    background-color: ;
    }
    label{
        color: black;
    }
    span{
        color:#6a6c71;
        font-size: 14px;
        margin-left: 200px;
    }
    .form-control{
        width: 100%;
    }
    
    
</style>
<body>
    <h1 style="font-size: 30px; text-align: center; margin:20px;">Basic Account Information</h1>
    <h6 style="color: grey; font-weight:300;">These settings include basic information about your account </h6>

    <form class="form-inline" method="POST" enctype="multipart/form-data">

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Full Name </label>
            </div>
            <div style="display: flex;" >
                <div class="col-auto">
                    <input type="text" disabled name="FullName" value='<?php echo $_SESSION["Nom"] .'&nbsp;'. $_SESSION["Prenom"]  ?>'  class="form-control" >
                </div>
                <div class="col-auto">
                    <span  class="form-text">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The name that it is used for ID verification. 
                    </span>
                </div>
            </div> 
        </div>

        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Phone number (Sign In)</label>
            </div>
            <div style="display: flex;">
                <div class="col-auto">
                    <input type="text" disabled name="FullName" value='<?php echo $_SESSION["Phone"]  ?>'  class="form-control" >
                </div>
                <div class="col-auto">
                    <span  class="form-text">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will receive messages from PillPal at this phone number. 
                    </span>
                </div>
            </div> 
        </div>

        <br>
           <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Reset your password</label>
            </div>
            <div style="display: flex;">
                <div class="col-auto">
                    <input type="password" name="psswd" class="form-control" placeholder="New password">
                </div>
                <div style="margin-left: 500px;" class="col-12">   
                        <button style="padding:10px; " class=" btn btn-primary" name="Envoyer1"  type="submit" > 
                            Reset your password
                        </button>            
                </div>
            </div>
        </div>

        <?php 
            if  ( !empty($_POST['psswd']) & isset($_POST['Envoyer1']) )
            {
                $new_pass=md5($_POST['psswd']);
                $reqe=$conn->prepare("UPDATE `fiche` SET `Password`=:val1 WHERE `CNE`=:val2 ");
                $reqe->execute(array(':val1'=>$new_pass,':val2'=>$_SESSION['CNE']));

                
                
                
                echo 'Your password has been reset successfully';
                 
            } 
        ?>

        <br>

        


        <div class="align-items-center">
            <div class="col-auto">
                <label for="formFile" class="form-label">Import your profile image</label>
                <input class="form-control" type="file" name="image" id="formFile">
            </div>
        </div>


        
        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label"> Language </label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" name="Langage" class="form-select" aria-label="Default select example">
                        <option >Select your language</option>
                        <option value="english">English</option>
                        <option value="français">Français</option>
                        <option value="español">Espagñol</option>
                    </select>
                </div> 
            </div> 
        </div>

        
        <br>

        <h1 style="font-size: 30px;" >Additional Information</h1>
        <h6 style="color: grey; font-weight:300;">Let us know more about you </h6>
<br>


        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Gender</label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" class="form-select" name="Gender" aria-label="Default select example">
                        <option selected>Select your gender</option>                  
                        <option value="male">Male</option>                    
                        <option value="female">Female</option>                           
                        
                    </select>
                </div> 
            </div> 
        </div>


        <br>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Height</label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <input type="text" name="Height" style="width: 500px;" class="form-control" placeholder="Enter your height (cm)">
                </div> 
            </div> 
        </div>

        <br>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Weight</label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <input type="text" name="Weight" style="width: 500px;" class="form-control" placeholder="Enter your weight (Kg)">
                </div> 
            </div> 
        </div>

        <br>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label  class="col-form-label">Year of birth </label>
            </div>
            <div style="display: flex;" >
                <div class="col-md">
                    <select style="width: 500px;" class="form-select" name="BirthYear" aria-label="Default select example">
                        <option>Year</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>                
                    </select>
                </div> 
            </div> 
        </div>
        <br><br>
        <button style="padding:10px; " class="btn btn-primary" name="Envoyer2" type="submit" > 
            Confirm your changes
        </button>  
    </form>

    <?php

        function test_input($var) 
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        if ( !empty($_FILES['image']['name']) & !empty($_POST['Langage']) & !empty($_POST['Height']) & !empty($_POST['Weight'])& isset($_POST['Envoyer2']) & !empty($_POST['Gender']) & !empty($_POST['BirthYear'])  )
        {
            $users=$_FILES["image"]["name"];
            $extension=pathinfo($users, PATHINFO_EXTENSION);
            $file_extension=strtolower(strchr($users,"."));
            $extensios_autorise=array('.png','.jpg','.jpeg');
            $randomno=rand(0,100);
            $rename='pillpal'.date('Ymd'). $randomno;
            $newname=$rename.'.'.$extension;
            $file_temp_name=$_FILES['image']['tmp_name'];
            $file_dest='users/'.$newname;

            $langage=$_POST['Langage'];
            $height=$_POST['Height'];
            $gender=$_POST['Gender'];
            $year=$_POST['BirthYear'];
            $weight=$_POST['Weight'];

            if ( in_array($file_extension,$extensios_autorise) )
            {
                if(move_uploaded_file($file_temp_name,$file_dest))
                {
                    $statement1 = $conn->prepare("UPDATE `fiche` SET ProfileImg=:img , Height=:height, Weight=:weight, BirthYear=:birth, Langage=:lang, Gender=:gen WHERE CNE=:cne ");
                    $statement1->execute(array(':img'=>$newname,'height'=>$height,':weight'=>$weight,':birth'=>$year,':lang'=>$langage,':gen'=>$gender,':cne'=>$_SESSION['CNE']));
                    echo "Your account details have been saved.";
                }

            }else{
                echo "Only these extensions: .png/.jpg/.jpeg are autorised";
            }
            
        }

    
    
    ?>
    


</body>
</html>