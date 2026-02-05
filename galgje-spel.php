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

<div class="array">
<?php
$huidigwoord = isset($_POST['geheim_woord']) ? $_POST['geheim_woord'] : (isset($_POST['woord']) ? strtolower(trim($_POST['woord'])) : '');

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

    $display = "";
    foreach (str_split($huidigwoord) as $l) {
        $display .= (in_array(strtolower($l), $geradenletters)) ? $l . " " : "_ ";
    }

    echo "<h2>" . $display . "</h2>";
    echo "<p>Foute letters: " . implode(' ', $fouteletters) . "</p>";
    ?>

    <?php
    $spongebobcount = 8 - count($fouteletters);
    for ($i = 0; $i < $spongebobcount; $i++) {
        echo '<img src="spongebob-meme.gif" alt="" class="sponge">';
    }
    ?>

    <?php 
    $gewoord = !str_contains($display, '_');
    $gameOver = ($spongebobcount <= 0) || $gewoord;

    if ($gameOver) {
        if ($gewoord) {
            echo "<h1>Gefeliciteerd!</h1>";
            echo "<h1>Je hebt het goed geraden!</h1>";
        } else {
            echo "<h3>Het woord was: $huidigwoord</h3>";
            echo "<h1>Game Over</h1>";
            echo "<h1>Je hebt geen spongebobs meer</h1>";
        }
    }
    ?>

    <?php if (!$gameOver): ?>
    <form method="post">
        <input type="hidden" name="geheim_woord" value="<?php echo $huidigwoord; ?>">
        <input type="hidden" name="geraden_letters" value="<?php echo implode(',', $geradenletters); ?>">
        <input type="hidden" name="foute_letters" value="<?php echo implode(',', $fouteletters); ?>">
        
        <input maxlength="1" type="text" class="antwoord-veld" name="letter" placeholder="Letter..." required autofocus autocomplete="off" pattern="[a-zA-Z]">
        <div>
            <button type="submit">Raad</button>
            <?php endif; ?>
            <a href="zelf-kiezen.php"><button type="button">Nieuw spel</button></a>
        </div>
    </form>
    <?php
}
?>
</div>
</body>
</html>