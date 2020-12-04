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

        <?php include_once('menu2.php');?>
       
       

        <h2 id="cennik">Cennik zajęć</h2>
                
        <table id="tabela">
            <tbody>
                <tr>
                    <th>Miejscowość</th>
                    <th>Czas (60 min)</th>
                    <th>Cena</th>
                </tr>
                <tr>
                    <td>Zakopane</td>
                    <td>1</td>
                    <td>50 zł</td>
                </tr>
                <tr>
                    <td>Gdańsk</td>
                    <td>1</td>
                    <td>40 zł</td>
                </tr>
            </tbody>
        </table>

        <h2 id="plan_zajec">Rozkład zajęć</h2>

        <table id="tabela">
            <tbody>
                <tr>
                    <th>Miejscowość</th>
                    <th>Dzień</th>
                    <th>Godzina</th>
                </tr>
                <tr>
                    <td>Zakopane</td>
                    <td>Pon - Czw</td>
                    <td>17 - 20</td>
                </tr>
                <tr>
                    <td>Gdańsk</td>
                    <td>Wt - Pt</td>
                    <td>16 - 21</td>
                </tr>
            </tbody>
        </table>
        
        <div class='wylo'>
            <form method='post' action='wylogowanie.php'>
                <input type='submit' value='Wyloguj się'>
            </form>
        </div>


        <?php include_once('stopka.php');?>
    </div>   
</body>
</html>