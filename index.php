<?php
$quote = "";
$spr = "Quotes Hari Ini";

function codeexcpref($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$quote = codeexcpref($_GET["quote"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content=<?php $quote ?> />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="*Quotes Hari Ini*" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:type" content="wangsaf.PNG" />
    <meta property="og:image" content="wangsaf.PNG" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1080" />
    <title><?= $spr ?></title>
</head>
<body>
    <h1><?= $spr ?></h1>

    <h3><?= $quote ?></h3>
    <img src="wangsaf.PNG" alt="Quote Logo">
</body>
</html>
