<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <table>
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>User</strong></td>
            <td><strong>Password</strong></td>
        </tr>
        <?php
            include("./db/conexao.php");

            $select = mysqli_query($conexao,"select * from login order by id desc");
            while($linha=mysqli_fetch_array($select)){?>
                <tr>
                    <td><?=$linha["ID"]?></td>
                    <td><?=$linha["Usuario"]?></td>
                    <td><?=$linha["Senha"]?></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>