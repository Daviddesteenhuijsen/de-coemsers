<!DOCTYPE html>
<html>
<head>
    <title>Galgje (Cas, David en Spongbob)</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>GalgBob</h1>

<div class="array">
<?php
// alle woorden in een array voor de randomizer //
$woorden = [
    "appel","boom","fiets","water","lucht","zon","maan","ster","huis","straat",
    "weg","brug","auto","trein","station","raam","deur","tafel","stoel","bord",
    "mes","vork","lepel","glas","kop","boek","pen","papier","schrift","school",
    "leraar","student","klas","les","toets","examen","vak","taal","woord ","zin",
    "tekst ","verhaal ","pagina ","hoofdstuk ","titel ","foto ","beeld ","kleur ","vorm ","lijn",
    "cirkel","vierkant","driehoek","schaduw","licht","donker","helder","zacht","hard","warm",
    "koud","nat","droog","snel","traag","hoog","laag","breed","smal","dik",
    "dun","lang","kort","oud","jong","nieuw","vroeg","laat","nu","straks",
    "gisteren","morgen","altijd","nooit","soms","vaak","zelden","hier","daar","waar",
    "wie","wat","waarom","hoe","wanneer","welke","dit","dat","deze","die",
    "ieder","alles","niets","iets","veel","weinig","meer","minder","meest","minst",
    "goed","slecht","mooi","lelijk","groot","klein","sterk","zwak","blij","verdrietig",
    "boos","rustig","druk","stil","luid","zachtjes","hardop","vriend","vriendin","familie",
    "gezin","ouder","kind","broer","zus","opa","oma","neef","nicht","mens",
    "dier","hond","kat","vogel","vis","paard","koe","schaap","kip","eend",
    "leeuw","tijger","beer","olifant","aap","slang","spin","mier","bij","vlinder",
    "bloem","plant","boomstam","blad","wortel","tak","zaad","gras","bloesem","fruit",
    "groente","aardappel","tomaat","komkommer","wortel","sla","ui","knoflook","brood","kaas",
    "boter","melk","yoghurt","vlees","kipfilet","pielemuis","visstick","rijst","pasta","soep","saus",
    "zout","peper","suiker","honing","chocolade","koekje","taart","ijsje","dessert","ontbijt",
    "lunch","diner","snack","drank","waterfles","sap","cola","thee","koffie","beker",
    "fles","kan","keuken","fornuis","oven","pan","koelkast","vriezer","wasbak","kraan",
    "badkamer","douche","bad","toilet","spiegel","handdoek","zeep","tandborstel","tandpasta","slaapkamer",
    "bed","kussen","deken","kast","plank","lade","vloer","muur","plafond","dak",
    "tuin","grasveld","bloemperk","hek","poort","schuur","straatsteen","stoep","plein","park",
    "bos","strand","zee","meer","rivier","beek","heuvel","berg","vallei","eiland",
    "wolk","regen","sneeuw","hagel","storm","wind","mist","weer","klimaat","temperatuur",
    "lente","zomer","herfst","winter","jaar","chingchong","maand","week","dag","uur","minuut",
    "seconde","klok","agenda","planning","taak","werk","baan","beroep","kantoor","vergadering",
    "collega","chef","klant","project","doel","idee","plan","strategie","resultaat","succes",
    "fout","probleem","oplossing","keuze","besluit","regel","wet","afspraak","contract","document",
    "bestand","map","computer","laptop","scherm","toetsenbord","muis","software","programma","code",
    "website","pagina","vagina","link","knop","menu","formulier","veld","tekstvak","afbeelding","video",
    "geluid","muziek","lied","ritme","melodie","instrument","gitaar","piano","drum","viool",
    "kunst","film","acteur","regisseur","boekwinkel","bibliotheek","krant","nieuws","artikel","informatie",
    "kennis","ervaring","gevoel","gedachte","droom","herinnering","toekomst","verleden","heden","waarheid","bezienswaardigheid", "verantwoordelijkheid", "ontwikkelingsfase", "communicatiemiddel", "omgevingsfactoren", 
    "gereedschapskist", "vervoersmiddelen", "ziekenhuispersoneel", "wetenschapsgebieden", "belangenverstrengeling",
    "arbeidsovereenkomst", "verzekeringspolis", "onderwijssysteem", "computertechnologie", "klimaatverandering",
    "duurzaamheidsbeleid", "persoonlijkheidsstoornis", "gebuikerservaring", "kwaliteitscontrole", "productontwikkeling", "KindercarnavalsoptochtvoorbereidingswerkzaamhedencomitÃ©lid","coems","balls","jieufganjaewf1"
];

// Woorden invoer en printing + letter invoer plus printing //
$huidigwoord = isset($_POST['geheim_woord']) ? $_POST['geheim_woord'] : trim($woorden[array_rand($woorden)]);
$geradenletters = isset($_POST['geraden_letters']) ? array_filter(explode(',', $_POST['geraden_letters'])) : [];
$fouteletters = isset($_POST['foute_letters']) ? array_filter(explode(',', $_POST['foute_letters'])) : [];

// invoer van de letter //
if (isset($_POST['letter'])) {
    $gok = strtolower(trim($_POST['letter']));

// Checked of de letter in het woord zit //
    if ($gok !== '' && !in_array($gok, $geradenletters) && !in_array($gok, $fouteletters)) {

// Letter is fout geraden dan verschijnt hij als foutletter en andersom //
        if (strpos(strtolower($huidigwoord), $gok) !== false) {
            $geradenletters[] = $gok;
        } else {
            $fouteletters[] = $gok;
        }
    }
}

// Weergeeft het woord als "____" //
$weergave = "";
foreach (str_split($huidigwoord) as $l) {
    $weergave .= (in_array(strtolower($l), $geradenletters)) ? $l . " " : "_ ";
}

// Gerade letter niet in het woord = letter boven en spongebob eraf //
echo "<h2>" . $weergave . "</h2>";
echo "<p>Foute letters: " . implode(' ', $fouteletters) . "</p>";

$spongebobs = 8 - count($fouteletters);
for ($i = 0; $i < $spongebobs; $i++) {
    echo '<img src="spongebob-meme.gif" alt="" class="sponge">';
}

// checked of je nog genoeg spongebobs hebt of niet, gamer over = 0 //
$levens = !str_contains($weergave, '_');
$gameover = ($spongebobs <= 0) || $levens;

if ($gameover) {
    if ($levens) {
        echo "<h1>Gefeliciteerd!</h1>";
        echo "<h1>Je hebt de Spongebobs gered!</h1>";
    } else {
        echo "<h3>Het woord was: $huidigwoord</h3>";
        echo "<h1>Game Over</h1>";
        echo "<h1>Je hebt alle Spongebobs vermoord!</h1>";
    }
}

// game over = alle buttons en input velden weg behalve "nieuw spel" //
if (!$gameover): 
?>
<form method="post">
    <input type="hidden" name="geheim_woord" value="<?php echo $huidigwoord; ?>">
    <input type="hidden" name="geraden_letters" value="<?php echo implode(',', $geradenletters); ?>">
    <input type="hidden" name="foute_letters" value="<?php echo implode(',', $fouteletters); ?>">

    <?php // zorgt ervoor dat je allen a-zA-Z letters kan invullen // ?>
    <input maxlength="1" type="text" class="antwoord-veld" name="letter" placeholder="Letter..." required autofocus autocomplete="off" pattern="[a-zA-Z]">
    <div>
        <button type="submit">Raad</button>
        <?php endif; ?>
        <a href="galgje.php"><button type="button">Nieuw spel</button></a>
    </div>
</form>
</body>
</html>