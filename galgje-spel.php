<!DOCTYPE html>
<html>
<head>
    <title>Galgje (Cas en David)</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Galgje</h1>

<div class="container">
    <?php

    // het woord dat geraden moet worden //

    $woord = $_POST['woord'] ?? 'informatica'; 
    $lengte = strlen($woord);

    $raadwoord = strrepeat(" ", $lengte);
    echo "<div class='woord-display'>" . trim($raadwoord) . "</div>";

    // easter eggs //

    if ($woord == 'coems') {
        echo '<h2>🤑🤑🤑COEMS🤑🤑🤑secret!🤑🤑🤑</h2><br><img src="spongebob-meme.gif" alt="">';
    } elseif ($woord == '🤑') {
        echo '<h2>🤑🤑🤑COEMS🤑🤑🤑secret!🤑🤑🤑</h2><br><img src="spongebob-meme.gif" alt="">';
    }

    if ($woord == 'ronaldo') {
        echo '<br><img src="ronaldo-drinking-meme.gif" alt="">';
    }

    if ($woord == 'konijn') {
        echo '<br><img src="bunny.gif" alt="">';
    } elseif ($woord == 'bunny') {
        echo '<br><img src="bunny.gif" alt="">';
    } elseif ($woord == 'rabbit') {
        echo '<br><img src="bunny.gif" alt="">';
    }
    ?>
</div>
    <input maxlength="1" type="text" class="antwoord-veld" name="woord" placeholder="Raad een letter...">
    <div><button type="submit">Raad</button></div>
    <?php

    // check of de letter geraden is of niet //

        $klaar = true;
        for ($i = 0; $i < strlen($woord); $i++) {
        if ($woord[$i] != " " && !in_array($woord[$i], $raadwoord)) {
            $klaar = false;
        }
    }

    if ($klaar) {
        echo "<p>Je hebt het woord geraden!</p>";
        echo "<p>Het woord was: <b>" . $woord . "</b></p>";
        echo "<a href='?reset=1'>Nieuw spel</a>";
    } else {
        echo "<p>Tot nu toe geraden: ";
        for ($i = 0; $i < strlen($woord); $i++) {
            if (inarray($woord[$i], $raadwoord)) {
                echo $woord[$i] . " ";
            } else {
                echo " ";
            }
        }
        echo "</p>";
    }
    ?>
</body>
</html>