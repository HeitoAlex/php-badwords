<?php
    $text = 'Ezechiele 25:17. Il cammino dell\'uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi. Benedetto sia colui che nel nome della carità e della buona volontà conduce i deboli attraverso la valle delle tenebre; perché egli è in verità il pastore di suo fratello e il ricercatore dei figli smarriti. E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno su coloro che si proveranno ad ammorbare ed infine a distruggere i miei fratelli. E tu saprai che il mio nome è quello del Signore quando farò calare la mia vendetta sopra di te.';

    $length = strlen($text);

    $newText = str_replace($_GET['bannedWord'], '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $text; ?> </p>
    <h1>La lunghezza è: <?php echo $length; ?> </h1>

    <form action="./index.php" method="GET">
        <input type="text" name="bannedWord">
    </form>

    <p> <?php echo $newText; ?> </p>
</body>
</html>