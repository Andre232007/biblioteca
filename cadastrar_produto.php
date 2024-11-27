<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto_id = $_POST["produto_id"];
    $produto_nome = $_POST["produto_nome"];
    $produto_preco = $_POST["produto_preco"];
    $produto_quantidade = $_POST["produto_quantidade"];
    $produto_categoria = $_POST["produto_categoria"];

    $sql = "INSERT INTO produtos (id_do_produto, nome_do_produto, preco, quantidade_em_estoque, categoria)
            VALUES ('$produto_id', '$produto_nome', '$produto_preco', '$produto_quantidade', '$produto_categoria')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
