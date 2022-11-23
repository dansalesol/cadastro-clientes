<html>

<head>
<title>Exemplo PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=UTF-8');



//echo 'Versao Atual do PHP: ' . phpversion() . '<br>';
echo 'Cadastro, consulta e alteracao de clientes' .  '<br>';

$servername = "db";
$username = "root";
$password = "Senha123";
$database = "clientes";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM principal";

if ($result = mysqli_query($link, $query)) {

    
    while ($row = mysqli_fetch_assoc($result)) {
        printf ("%s -  %s -  %s -  %s <br>", $row["id"], $row["nome"], $row["email"], $row["telefone"]);
    }

    
    mysqli_free_result($result);
}


mysqli_close($link);

?>

</html>
