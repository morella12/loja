<?php
include('conecta.php');
include('bancoArquivo.php');

$id = $_POST['id'];

if(removerProduto($dao,$id))
{
    echo'
    <script>
        alert("Produto removido com sucesso!");
    </script>
    ';
    header("Refresh:0; url=produto-lista.php");
}
else
{
    echo'
    <script>
        alert("Este produto não pode ser removido!");
    </script>
    ';
    header("Refresh:0; url=produto-lista.php");
    $dao->close();
}	