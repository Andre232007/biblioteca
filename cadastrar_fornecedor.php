<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fornecedor_id = $_POST["fornecedor_id"];
    $fornecedor_nome = $_POST["fornecedor_nome"];
    $fornecedor_endereco = $_POST["fornecedor_endereco"];
    $fornecedor_telefone = $_POST["fornecedor_telefone"];
    $fornecedor_produto = $_POST["fornecedor_produto"];

    $sql = "INSERT INTO fornecedores (id_fornecedor, nome_fornecedor, endereco, telefone, produto_fornecido)
            VALUES ('$fornecedor_id', '$fornecedor_nome', '$fornecedor_endereco', '$fornecedor_telefone', '$fornecedor_produto')";

    if ($conn->query($sql) === TRUE) {
        echo "Fornecedor cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>