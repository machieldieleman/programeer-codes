<?php
    SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursus</title>
</head>
<body>

    <?php

        $logged = 'inloggen';

        function consoleLog($msg) {
            echo '<script type="text/javascript">console.log('. str_replace('<', '\\x3C', json_encode($msg)). ');</script>';}
        

        if(isset($_SESSION['loggedIn'])) {
            $logged = 'uitloggen';
        }

        $cursussen = [
            [
                'naam' => 'CSS',
                'omschrijving' => 'CSS(opmaak)',
                'prijs' => '$200',
            ],
            [
                'naam' => 'HTML',
                'omschrijving' => 'HTML(structuur)',
                'prijs' => '$400',
            ],
            [
                'naam' => 'JavaScript',
                'omschrijving' => 'JavaScript(apps)',
                'prijs' => '$300',
            ],
            [
                'naam' => 'Python',
                'omschrijving' => 'Python',
                'prijs' => '$500',
            ],
        ];

    ?>


    <h1>Inschrijven</h1>
    <a href="">home</a>
    
    <a href="uitloggen.php">uitloggen</a><br><br>
    <form action="?" method="POST"> 
        <table border="1" cellspacing="0" cellpadding="5">
            

        <tr>
            <td>Naam</td>
            <td>Omschrijving</td>
            <td>Prijs</td>

            <?php
            if(isset($_SESSION['loggedIn'])) {
                echo '<td>Inschrijven</td></tr>';
                foreach($cursussen as $cursus) {
                    echo '
                    <tr>
                        <td>'.$cursus['naam'].'</td>
                        <td>'.$cursus['omschrijving'].'</td>
                        <td>'.$cursus['prijs'].'</td>
                        <td><a href="index.php?ingelogd&cursus='.$cursus['naam'].'">inschrijven</a></td>
                    </tr>
                    ';
                   
                }
                if(isset($_GET['cursus'])){
                echo 'je bent ingeschreven voor cursus: '. $_GET['cursus'];
                echo '</table></form>';
                }
            }else {
                echo '</tr>';
                foreach($cursussen as $cursus) {
                    echo '
                    <tr>
                        <td>'.$cursus['naam'].'</td>
                        <td>'.$cursus['omschrijving'].'</td>
                        <td>'.$cursus['prijs'].'</td>
                    </tr>
                    ';
                }
                echo '</table></form>';
            }
            ?>
    </body>
</html>