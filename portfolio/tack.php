<?php
$namn = htmlspecialchars ($_POST["namn"] ?? "", ENT_QUOTES, "UTF-8");
$epost = htmlspecialchars($_POST["epost"] ?? "", ENT_QUOTES, "UTF-8");
$amne = htmlspecialchars($_POST["ämne"] ?? "", ENT_QUOTES, "UTF-8");
$typ = htmlspecialchars ($_POST["typ"]  ?? "", ENT_QUOTES, "UTF-8");
$meddelande = htmlspecialchars ($_POST["meddelande"] ?? "",  ENT_QUOTES, "UTF-8");  
?>
<!Doctype html>
<html lang= "sv">
<head>
 <meta charset="UTF-8">
  <meta name= "viewport" content="width=device-width, initial-scale=1.0">
   <meta name= "description" content="Tack för ditt meddelande.">
    <title> Tack för ditt meddelande</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <header>
    <h1>Tack för ditt meddelande</h1>
</header>
<main>   
    <p> Tack för ditt meddelande, <?php echo $namn; ?>.</p>
    <p>E-post: <?php echo $epost; ?></p>
    <p>Ämne: <?php echo $amne; ?></p>
    <p>Typ av förfrågan: <?php echo $typ; ?></p>
    <p>Meddelande: <?php echo $meddelande; ?></p>
</main>
   

    <footer>
    <p>Digital Portfolio 2026</p>
    </footer>
    </body>
    </html>
