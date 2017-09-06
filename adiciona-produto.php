<?php include "cabecalho.php";
			include "conecta.php";
			include "banco-produto.php";

$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)) {
    $usado = 1;
} else {
    $usado = 0;
}

if(insereProduto($conexao, $produto, $preco, $descricao,$categoria_id,$usado)) {
?>
<p class="alert-success">Produto <?= $produto; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O produto <? = $produto; ?> não foi adicionado: <?= $msg ?></p>
	<?php
		}
	?>

<?php include "rodape.php"; ?>