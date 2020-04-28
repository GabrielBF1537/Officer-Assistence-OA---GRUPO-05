<h1 style="text-align:center">Criar login do cliente</h1>
<form action="?page=salvar-cliente" method="POST">
	<div class="form-group">
		<input type="text" name="usuario_cliente" placeholder="Usuário" class="form-control">
	</div>
	<div class="form-group">
		<input type="number" name="senha_cliente" placeholder="Crie uma senha de 6 digitos" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>