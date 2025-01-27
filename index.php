<?php
$quote = "";
$spr = "Quotes Hari Ini";

function codeexcpref($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Ambil nilai parameter GET "kalimat"
if (isset($_GET['quote'])) {
    $quote = $_GET['quote'];
    $quote = codeexcpref($_GET["quote"]);
} else {
    $quote = "Format error, Usage : ?quote=aku+ganteng+banget";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<?= htmlspecialchars($quote) ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="Quotes Hari Ini" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image" content="http://gpnode6.mhsshopid.my.id:19135/wangsaf.PNG" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <title><?= $spr ?></title>
</head>
<body>
    <h1><?= $spr ?></h1>

    <h3><?= $quote ?></h3>
    <img src="wangsaf.PNG" alt="Foto(error)">
</body>
</html>
