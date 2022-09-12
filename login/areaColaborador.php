<?php
include_once ("conexao.php");
$sql = "SELECT * FROM contra_cheque ORDER BY mes DESC WHERE ";

$result = $mysqli ->query($sql);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logoicon.png" type="image/x-icon">
    <title>Area do Colaborador</title>
</head>
<body>
<div>
<table>
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Mês</th>
            <th scope="col">Contra Cheque</th>

        </tr>           
    </thead>
    <tbody>
        <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['colaborador']."</td>";
                    echo "<td>".$user_data['mes']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                }
        ?>
    </tbody>

</table>
</div>





</body>
</html>
