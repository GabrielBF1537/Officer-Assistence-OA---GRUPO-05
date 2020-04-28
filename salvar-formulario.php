<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO formulario (cliente_id_cliente, nome_formulario, cpf_formulario, data_nasc_formulario, genero_formulario,
			email_formulario, telefone_formulario, endereco_formulario) VALUES (".$_REQUEST["cliente_id_cliente"].", '".$_REQUEST["nome_formulario"]."', '".$_REQUEST["cpf_formulario"]."', '".$_REQUEST["data_nasc_formulario"]."', '".$_REQUEST["genero_formulario"]."','".$_REQUEST["email_formulario"]."','".$_REQUEST["telefone_formulario"]."','".$_REQUEST["endereco_formulario"]."')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE formulario SET 
						cliente_id_cliente=".$_REQUEST["cliente_id_cliente"].",
						nome_formulario='".$_REQUEST["nome_formulario"]."',
						cpf_formulario='".$_REQUEST["cpf_formulario"]."',
						data_nasc_formulario='".$_REQUEST["data_nasc_formulario"]."',
						genero_formulario='".$_REQUEST["genero_formulario"]."',
						email_formulario='".$_REQUEST["email_formulario"]."',
						telefone_formulario='".$_REQUEST["telefone_formulario"]."',
						endereco_formulario='".$_REQUEST["endereco_formulario"]."'
				    WHERE 
						id_formulario=".$_REQUEST["id_formulario"];
						
			//die($sql);
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM formulario WHERE id_formulario=".$_REQUEST["id_formulario"];
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Excluído com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>
<p>
	<button type="button" onclick="window.history.back()" class="btn btn-primary">Voltar</button>
</p>
<p>
	<button type="button" onclick="location.href='?page=listar-formulario';" class="btn btn-success">Listar</button>
</p>







