<?php 
include "cabecalho.php"; 
include "conecta.php";
include "banco-categoria.php";    

$categorias = listaCategorias($conexao);
?>

	<h1>Formulário de Cadastro</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" class="form-control" name="produto" /></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco" /></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Categorias</td>
                <td>
                    <?php foreach($categorias as $categoria): ?> 
                    <input type="radio" name="categoria_id" value="<?=$categoria['id']?>"><?= utf8_encode($categoria['nome'])?> </br>
                    <?php endforeach ?>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
            </tr>

        </table>
	</form>

<?php include "rodape.php"; ?>