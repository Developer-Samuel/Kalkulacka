<?php
    $cislo1 = 0;
    $cislo2 = 0;
    $vypis_sucet = "";
    $vypis_sucin = "";
    $vypis_rozdiel = "";
    $vypis_podiel = "";
    if(isset($_GET['submit']))
    {
        $cislo1 = $_GET['cislo1'];
        $cislo2 = $_GET['cislo2'];
        $sucet = $cislo1 + $cislo2;
        $sucin = $cislo1 - $cislo2;
        $rozdiel = $cislo1 * $cislo2;
        $mocnina = pow($cislo1, $cislo2);

        if($cislo2 == 0) 
        { 
            $podiel = 0;
            echo "<script>alert('Nemôžeš deliť nulou!')</script>";
            $vypis_sucet = "Súčet: " . $_GET['cislo1'] . " + " . $_GET['cislo2'] . " = " . round($sucet,2);
            $vypis_sucin = "Súčín: " . $_GET['cislo1'] . " - " . $_GET['cislo2'] . " = " . round($sucin,2);
            $vypis_rozdiel = "Rozdiel: " . $_GET['cislo1'] . " * " . $_GET['cislo2'] . " = " . round($rozdiel,2);
            $vypis_mocnina = "Mocnina: " . $_GET['cislo1'] . "<sup>" . $_GET['cislo2'] . "</sup>" . " = " . round($mocnina,2);
            $vypis_podiel = "Podiel: Nemôžeš deliť nulou";
        } 
        else
        {
            $podiel = $cislo1 / $cislo2;
            $vypis_sucet = "<u>Súčet:</u> " . $_GET['cislo1'] . " + " . $_GET['cislo2'] . " = " . round($sucet,2);
            $vypis_sucin = "<u>Súčín:</u> " . $_GET['cislo1'] . " - " . $_GET['cislo2'] . " = " . round($sucin,2);
            $vypis_rozdiel = "<u>Rozdiel:</u> " . $_GET['cislo1'] . " * " . $_GET['cislo2'] . " = " . round($rozdiel,2);
            $vypis_podiel = "<u>Podiel:</u> " . $_GET['cislo1'] . " / " . $_GET['cislo2'] . " = " . round($podiel,2);
            $vypis_mocnina = "<u>Mocnina:</u> " . $_GET['cislo1'] . "<sup>" . $_GET['cislo2'] . "</sup>" . " = " . round($mocnina,2);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulačka</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="form" method="GET" action="<?php $_SERVER['PHP_SELF']; ?>">
        <input type='number' name='cislo1' value="<?= $cislo1 ?>" step="0.0000000001" placeholder='Číslo 1' required><br>
        <input type='number' name='cislo2' value="<?= $cislo2 ?>" step="0.0000000001" placeholder='Číslo 2' required><br><br>
        <input type="submit" value="Počítaj" name="submit">
    </form>

    <?php if(isset($cislo1) && isset($cislo2)) { ?>
    <div class="vysledok">
        <p class="vysledok-text">   
            <?php 
                echo "<span>" . $vypis_sucet . "</span><br>"; 
                echo "<span>" . $vypis_sucin . "</span><br>";
                echo "<span>" . $vypis_rozdiel . "</span><br>";
                echo "<span>" . $vypis_podiel . "</span><br>";
                echo "<span>" . $vypis_mocnina . "</span>";
            ?>
        </p>
    </div>

    <?php } ?>
</body>
</html>