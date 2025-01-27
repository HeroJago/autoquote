<?php
$quote = "";
$spr = "Quotes Hari Ini";

function codeexcpref($data)
{
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
    <meta property="og:image" content="https://quote.the2challiance.my.id/icon.PNG" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <title><?= $spr ?></title>
    <link rel="stylesheet" type="text/css" href="styles.css?v=4">
    <link rel="shortcut icon" href="icon.PNG">
</head>

<body>
	<div class="container">
        <div class="box">
            <span></span>
            <div class="content">
                <h2><?= $spr ?></h2>
                <h3>"<?= $quote ?>"</h3>
                <img src="icon.PNG" alt="Foto(error)">
            </div>
        </div>
    </div>
</body>
</html>
