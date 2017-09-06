<?php 
include "cabecalho.php"; 
include "conecta.php";
include "banco-produto.php";
			$produtos = listaProdutos($conexao); 
			if(array_key_exists("removido", $_GET) && $_GET['removido']=='true'){?>
			<p class="alert-success">Produto apagado com sucesso</p>				
			<?php }?>
			<table class="table table-striped table-bordered">
				<tr>
					<th>Produto</th>
					<th>Preço</th>
					<th>Descrição</th>
					<th>Categoria</th>
					<th>Ação</th>
				</tr>
				<?php foreach($produtos as $produto): ?>

					<tr>
						<td><?= $produto['nome']?></td>
						<td><?= $produto['preco']?></td>
						<td><?= substr($produto['descricao'], 0, 40) ?></td>						
						<td><?= utf8_encode($produto['nome_categoria']) ?></td>
						<td>
						<form action="remove-produto.php" method="post" >
						<input type="hidden" name="id" value="<?=$produto['id']?>" />
						<button class="btn btn-danger">remover</button>
						</form>
						</td>
					</tr>
				<?php endforeach ?>
			</table>

<?php include "rodape.php";?>