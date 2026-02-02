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

<div class="array">
<?php
session_start();

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
    "groente","aardappel","tomaat","komkommer","cumcummer","wortel","sla","ui","knoflook","brood","kaas",
    "boter","melk","yoghurt","vlees","kipfilet","pielemuis","visstick","rijst","pasta","soep","saus",
    "zout","peper","suiker","honing","chocolade","koekje","taart","ijsje","dessert","ontbijt",
    "lunch","diner","snack","drank","waterfles","sap","cola","thee","koffie","beker",
    "fles","kan","keuken","fornuis","oven","pan","koelkast","vriezer","wasbak","kraan",
    "badkamer","douche","bad","toilet","spiegel","handdoek","zeep","tandborstel","tandpasta","slaapkamer",
    "bed","kussen","laken","deken","kast","plank","lade","vloer","muur","plafond","dak",
    "tuin","grasveld","bloemperk","hek","poort","schuur","straatsteen","stoep","plein","park",
    "bos","strand","zee","meer","rivier","beek","heuvel","berg","vallei","eiland",
    "wolk","regen","sneeuw","hagel","storm","wind","mist","weer","klimaat","temperatuur",
    "lente","zomer","herfst","winter","jaar","chingchong","maand","week","dag","uur","minuut",
    "seconde","klok","agenda","planning","taak","werk","baan","beroep","kantoor","vergadering",
    "collega","chef","klant","project","doel","idee","plan","strategie","resultaat","succes",
    "fout","probleem","oplossing","keuze","besluit","regel","wet","afspraak","contract","document",
    "bestand","map","computer","laptop","scherm","toetsenbord","appelsap","appelesappele","perensap","muis","software","programma","code",
    "website","pagina","vagina","link","knop","menu","formulier","veld","tekstvak","afbeelding","video",
    "geluid","muziek","lied","ritme","melodie","instrument","gitaar","piano","drum","viool",
    "kunst","film","acteur","regisseur","boekwinkel","bibliotheek","krant","nieuws","artikel","informatie",
    "kennis","ervaring","gevoel","gedachte","droom","herinnering","toekomst","verleden","heden","waarheid","bezienswaardigheid", "verantwoordelijkheid", "ontwikkelingsfase", "communicatiemiddel", "omgevingsfactoren", 
    "gereedschapskist", "vervoersmiddelen", "ziekenhuispersoneel", "wetenschapsgebieden", "belangenverstrengeling",
    "arbeidsovereenkomst", "verzekeringspolis", "onderwijssysteem", "computertechnologie", "klimaatverandering",
    "duurzaamheidsbeleid", "persoonlijkheidsstoornis", "gebruikerservaring", "kwaliteitscontrole", "productontwikkeling", "KindercarnavalsoptochtvoorbereidingswerkzaamhedencomitÃ©lid","coems","balls","jieufganjaewf1"
];
    $index = array_rand( $woorden);
    $woord = $woorden[$index];
    $display = str_repeat("_ ", strlen($woord));
    echo $display;

    ?>
</h2><br><img src="spongebob-meme.gif" alt=""> 
</div>
    <input maxlength="1" type="text" class="antwoord-veld" name="woord" placeholder="Raad een letter...">
    <div><button type="submit">Raad</button></div>
</body>
</html>