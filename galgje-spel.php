<!DOCTYPE html>
<html>
<head>
    <title>GalgBob (Cas, David en Spongbob)</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>GalgBob</h1>

 <!--Bepaal het woord-->
<div class="array">
<?php
$huidigwoord = $_POST['geheim_woord'] ?? (isset($_POST['woord']) ? strtolower(trim($_POST['woord'])) : '');

if ($huidigwoord) {
    $geradenletters = isset($_POST['geraden_letters']) ? array_filter(explode(',', $_POST['geraden_letters'])) : [];
    $fouteletters = isset($_POST['foute_letters']) ? array_filter(explode(',', $_POST['foute_letters'])) : [];
    if (isset($_POST['letter'])) {
        $gok = strtolower(trim($_POST['letter']));
        if ($gok !== '' && !in_array($gok, $geradenletters) && !in_array($gok, $fouteletters)) {
            if (strpos(strtolower($huidigwoord), $gok) !== false) {
                $geradenletters[] = $gok;
            } else {
                $fouteletters[] = $gok;
            }
        }
    }

    $weergave = "";
    foreach (str_split($huidigwoord) as $l) {
        $weergave .= (in_array(strtolower($l), $geradenletters)) ? $l . " " : "_ ";
    }

    echo "<h2>" . $weergave . "</h2>";
    echo "<p>Foute letters: " . implode(' ', $fouteletters) . "</p>";

    // laat de goede hoeveelheid spongebobs zien
    $spongebobcount = 8 - count($fouteletters);
    for ($i = 0; $i < $spongebobcount; $i++) {
        echo '<img src="spongebob-meme.gif" alt="" class="sponge">';
    }

    // zorgt ervoor dat het woord in _ weergegeven wordt
    $gewoord = !str_contains($weergave, '_');
    $dood = ($spongebobcount <= 0) || $gewoord;

    // laat zien of je gewonnen of verloren hebt
    if ($dood) {
        if ($gewoord) {
            echo "<h1>Gefeliciteerd!</h1>";
            echo "<h1>Je hebt de Spongebobs gered!</h1>";
        } else {
            echo "<h3>Het woord was: $huidigwoord</h3>";
            echo "<h1>Helaas</h1>";
            echo "<h1>Je hebt alle Spongebobs vermoord!</h1>";
        }
    }

    // maakt het geheime woord de geraden letters en foute letters niet zichtbaar als je dood bent
    if (!$dood) : ?>
        <form method="post">
            <input type="hidden" name="geheim_woord" value="<?php echo $huidigwoord; ?>">
            <input type="hidden" name="geraden_letters" value="<?php echo implode(',', $geradenletters); ?>">
            <input type="hidden" name="foute_letters" value="<?php echo implode(',', $fouteletters); ?>">

            <!--zorgt ervoor dat je maar 1 letter kan invullen-->
            <input maxlength="1" type="text" class="antwoord-veld" name="letter" placeholder="Letter..." required autofocus autocomplete="off" pattern="[a-zA-Z]">
            <div>
                <button type="submit">Raad</button>
    <?php endif; ?>
    <a href="galgje.php"><button type="button">Nieuw spel</button></a>
    </div>
        </form>
    <?php
}
?>
</div>
</body>
</html>