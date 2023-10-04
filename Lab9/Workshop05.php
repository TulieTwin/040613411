<?php include "connect.php";?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <div style="display:flex">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
    ?>
    <?php while ($row = $stmt->fetch()): ?>
        <div style="padding: 15px; text-align: center">
            <a href="Workshop05detail.php?username=<?=$row["username"]?>">
                <img src='Photo/<?=$row["username"]?>.jpg'>
            </a><br>   
            <?=$row["name"]?><br>
        </div>
    <?php endwhile; ?>
    </div>
    </body>
</html>