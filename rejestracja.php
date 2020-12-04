<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOTOWO S. A.</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="fav.ico">
    <link rel="shortcut icon" href="fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div id="main">
    
        <?php include_once('logo.php');?>

        <?php include_once('menu1.php');?>
        
        <div class="log">
            <form action="add_clients.php" method="post">
                <h1>Rejestracja zawodnika</h1>
                <input type="text" id="fname" name="fname" placeholder='Imię'><br>
                <input type="text" id="lname" name="lname" placeholder="Nazwisko"><br>
                <input type="email" id="email" name="email" placeholder="Email"><br>
                <input type="text" id="nick" name="nick" placeholder="Pseudonim"><br>
                <input type="password" id="pass" name="pass" placeholder="Hasło"><br>
                <input type="submit" value="Zarejestruj">
            </form>
        </div>   
    
        <?php include_once('stopka.php');?>
    </div>   
</body>
</html>