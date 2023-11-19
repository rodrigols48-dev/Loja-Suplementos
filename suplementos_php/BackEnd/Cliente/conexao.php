<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "suploja";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
/*if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";

    // Testar uma consulta simples
    $sql = "SELECT 'Conexão bem-sucedida' as mensagem";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        echo "Resultado da consulta: " . $row['mensagem'];
    } else {
        echo "Erro na consulta: " . $conn->error;
    }

}
*/

// Agora você pode usar $conn para interagir com o banco de dados

// Exemplo de consulta
$sql = "SELECT * FROM creatinas";
$result = $conn->query($sql);

/*// Manipular os resultados, por exemplo:
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["NomeProduto"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}
*/
// Fechar a conexão quando terminar
$conn->close();
?>
