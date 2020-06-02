<?php
    $result = "無し";
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>おみくじ</h1>
        <p>おみくじの結果:<?php print htmlsupecialchars($result,ENT_QUOTES,"UTF-8"); ?></p>
        <form action="sample.php" method="post">
            <button type="submitt" name="act" value="draw">おみくじを引く！</button>
        </form>
    </body>
</html>