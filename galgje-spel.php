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
    $woord = $_POST['woord'] ?? 'informatica'; 
    $lengte = strlen($woord);
    
    $raadwoord = str_repeat("_ ", $lengte);
    echo "<div class='woord-display'>" . trim($raadwoord) . "</div>";

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
    }
    ?>
</div>
    <input maxlength="1" type="text" class="antwoord-veld" name="woord" placeholder="Raad een letter...">
    <div><button type="submit">Raad</button></div>
</body>
</html>