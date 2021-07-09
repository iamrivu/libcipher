<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body">
    <?php
        include __DIR__ . "/src/Cipher.php";

        use libcipher\src as lib;

        // Do Encrypt
        lib\Cipher::encrypt("Hello World", "ghfrlk", "sdhgvy");
        echo "<br/>";
        // Do Decrypt
        lib\Cipher::decrypt("cXhqdm5lZ2xqOEx1ZCtyMjBEbTh1QT09", "ghfrlk", "sdhgvy");
    ?>
</body>
</html>