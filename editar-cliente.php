<h1>Editar Loguin</h1>
<?php
	$sql = "SELECT * FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-cliente" method="POST">
	<div class="form-group">
		<input type="text" name="usuario_cliente" placeholder="Usuário" class="form-control" value="<?php print $row->usuario_cliente; ?>">
	</div>
	<div class="form-group">
		<input type="number" name="senha_cliente" placeholder="Senha" class="form-control" value="<?php print $row->senha_cliente; ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>