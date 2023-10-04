<?php include "connect.php";?>

<html>
    <head>
        <meta charset="utf-8">
        <script>
            function confirmDelete(username) {
                var ans = confirm("ต้องการลบผู้ใช้ "+username+" ใช่หรือไม่");
                if (ans==true)
                    document.location = "Workshop06delete.php?username="+username;
            }
        </script>
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
            <a href='#' onclick='confirmDelete("<?=$row["username"]?>")'>ลบ</a>
        </div>
    <?php endwhile; ?>
    </div>
    <hr>
    <form action="Workshop08insert.php" method="post">
        Username : 
        <input type="text" name="username"><br>
        Password : 
        <input type="password" name="password"><br>
        ชื่อ - สกุล : 
        <input type="text" name="name"><br>
        ที่อยู่ : 
        <textarea name="address" rows="2"></textarea><br>
        เบอร์โทรศัพท์ : 
        <input type="text" name="mobile"><br>
        E-mail : 
        <input type="text" name="email"><br>
        <input type="submit" value="เพิ่มสมาชิก"><br>
    </form>
    </body>
</html>