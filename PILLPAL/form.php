<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/styles1.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
</head>
<body>

<form method="GET"> 
		    <table>
        <tr>
            <td>
                <label>Enter the time of the 1st dose:</label>
            </td>
            <td>
                <input type="time" name="first">
            </td>
            
        </tr>

        <tr>
            <td>
                <label>Enter the time of the 2nd dose:</label>
            </td>
            <td>
                <input  type="time" name="second">
            </td> 
        </tr>

        <tr>
            <td>
                <label>Enter the time of the 3rd dose:</label>
            </td>
            <td>
                <input  type="time" name="third">
            </td> 
        </tr>
        <tr>
            <td>
                <label>Enter the time of the 4th dose:</label>
            </td>
            <td>
                <input type="time" name="fourth">
            </td> 
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Ajouter' ></td>
        </tr>

         
    </table>


</form>


<?php
    echo $_SESSION['day'];
    $servname = 'localhost';
    $dbname = 'pillpal';
    $user = 'root';
    $pass = '';

    try{
        $db = new PDO("mysql:host=$servname;dbname=pillpal", $user, '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

    if ((empty($_GET['second'])))    
    {
        $dose2 = 0;
    }
    else{
        $dose2=$_GET['second'];
    }
    if ((empty($_GET['third'])))
    {
        $dose3 = 0;

    }else{
        $dose3=$_GET['third'];
    }
    
    if ((empty($_GET['fourth'])))
    {
        $dose4 = 0;
    }else{
        $dose4=$_GET['fourth'];
    }
    
    if (!empty($_GET['first']) )
    {
        $day=$_SESSION['day'];
        $dose1=$_GET['first'];
        
        $sql=$db->prepare("INSERT INTO `meds`(`WeekDays`, `FirstTime`, `SecondTime`, `ThirdTime`, `FourthTime`) VALUES (?,?,?,?,?)");
        $sql->execute(array($day,$dose1,$dose2,$dose3,$dose4));
    }
    
    unset($_GET['first']);
    unset($_GET['second']);
    unset($_GET['third']);
    unset($_GET['fourth']);

        
?>

</body>
</html>