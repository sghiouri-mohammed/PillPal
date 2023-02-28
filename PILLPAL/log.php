<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
        <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>PillPal</title>

  </head>
  <body>

  	<?php
            $servname = 'localhost';
            $dbname = 'pillpal';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE fiche(
                				CNE VARCHAR(30) NOT NULL,
                        Nom VARCHAR(30) NOT NULL,
                        Prenom VARCHAR(50) NOT NULL,
												Email VARCHAR(50) NOT NULL,
												Phone VARCHAR(50) NOT NULL,
                        Password VARCHAR(200) NOT NULL,
                        ProfileImg VARCHAR(30),
												BirthYear INT,
												Height INT,
												Weight INT,
												Langage VARCHAR(20),
												Gender VARCHAR(10),
                        UNIQUE(Phone))";      
                				$dbco->exec($sql);
            }
            
            catch(PDOException $e){
            }
    ?>

        <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Log in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Phone number" name="Phone" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="Password" />
            </div>
            <input type="submit" value="Se connecter" class="btn solid" />
            
          </form>
          <form action="#" class="sign-up-form" method="POST">

            <h2 class="title">Register</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="CNE" name="CNE" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last name" name="Nom" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First name" name="Prenom" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Doctor's mail" name="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Phone number" name="Phone" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="Password" />
            </div>
            <input type="submit" class="btn" value="Register" />
          
          </form>
        </div>
    </div>
         <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Register</h3>
            <p><br></p>
            <button class="btn transparent" id="sign-up-btn">
             Sign up 
            </button>
          </div>
          <img src="doctor.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already registred?</h3>
            <p><br></p>

            <button class="btn transparent" id="sign-in-btn" type="submit">
              Log in
            </button>
          </div>
          <img src="doc.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  
	<?php
	function test_input($par) {
	    $par = trim($par);
	    $par = stripslashes($par);
	    $par = htmlspecialchars($par);
	    return $par;
	}


		if ((!empty($_POST['CNE']) &(!empty($_POST['Nom'])) && (!empty($_POST['Prenom'])) && (!empty($_POST['Email'])) && (!empty($_POST['Phone']))&& (!empty($_POST['Password']))))
		{
			$CNE=test_input($_POST['CNE']);
			$Nom=test_input($_POST['Nom']);
			$Prenom=test_input($_POST['Prenom']);
			$Email=test_input($_POST['Email']);
			$Phone=test_input($_POST['Phone']);
			$Password=test_input($_POST['Password']);
			

			$sq=new PDO ("mysql:host=localhost;dbname=pillpal",'root','');
			$sq->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			if (!filter_var($Email, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z-' ]*$/",$Nom) || !preg_match("/^[a-zA-Z-' ]*$/",$Prenom) || !preg_match("/^[0][0-9]{9}$/",$Phone)){
				echo " <aside>Invalid format!<aside> ";
			}

			else{

					$table1 = $sq->prepare(" SELECT `Phone` FROM `fiche` ");
					$table1->execute();
					$pat1 = $table1->fetchAll();
					$d=0;
					foreach ( $pat1 as $i )
					{
						if ($Phone == $i['Phone'] )
						{
							$d=1;
							
						}
					}
					if ($d==1)
					{
							echo " <aside>This account already exists </aside> ";
					}
					else
					{
						$statement1 = $sq->prepare("INSERT INTO fiche(CNE,Nom,Prenom,Email,Phone,Password) VALUES (?,?,?,?,?,?)");
						$statement1->execute(array($CNE,$Nom,$Prenom,$Email,$Phone,$Password));

						echo " <aside>Successfully registred! <aside> ";
					}	
				}
			}	
		
	?>




	<?php

			$conn=new PDO ("mysql:host=localhost;dbname=pillpal",'root','');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if ((!empty($_POST['Phone'])) && (!empty($_POST['Password']))) 
		{
			$sign_mail_or_phone=htmlspecialchars($_POST['Phone']);
			$sign_passwd=htmlspecialchars($_POST['Password']);


				$tab1 = $conn->prepare(" SELECT `CNE`,`Nom`, `Prenom`, `Email`, `Phone`, `Password` FROM `fiche` ");
				$tab1->execute();
				$pat1 = $tab1->fetchAll();
				foreach ( $pat1 as $y )
				{
					if ( $sign_mail_or_phone == $y['Phone'] &&  $sign_passwd == $y['Password'] )
					{
						$_SESSION['CNE'] = $y['CNE'];
						$_SESSION['Nom'] = $y['Nom'];
						$_SESSION['Prenom'] = $y['Prenom'];
						$_SESSION['Email']=$y['Email'];
						$_SESSION['Phone']=$y['Phone'];
						$_SESSION['Password']=$y['Password'];

						$link="<script> window.open('dashboard.php','_self')</script>";
						echo $link;
					}
					else{
						
						echo "<aside>Incorrect password or identifier!<br> </aside>";
					}
				}
			
			
		}
	?>


<style>
	aside{
  position: absolute;
  bottom: 10px;
  right: 20px;
  color: #d2b9dd;
}
</style>

</body>
</html>


