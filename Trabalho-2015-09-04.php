<html>
    <B><U>Dados Cadastrais</U></B> <br></br>
		<B><U>Identificação</U></B>

    <br>
    <br>
    <form action="Trabalho-2015-09-04.php" method="POST">
<?php
	$acao = '';
	$valid = true;

	$nome = '';
	$cpf = '';
	$email = '';
	$cidade = '';
	$logradouro = '';
	$numero = '';
	$complemento = '';
	$cep = '';

	$validaNome = '';
	$validaCpf = '';
	$validaEmail = '';
	$validaCidade = '';
	$validaLogradouro = '';
	$validaCep = '';
		
	if ( isset($_POST['nome'] )){
	  $nome = $_POST['nome'];
	}
	
	if ( isset($_POST['cpf'] )){
	  $cpf = $_POST['cpf'];
	}
	
	if ( isset($_POST['email'] )){
	  $email = $_POST['email'];
	}

	if ( isset($_POST['cidade'] )){
	  $cidade = $_POST['cidade'];
	}
	
	if ( isset($_POST['logradouro'] )){
	  $logradouro = $_POST['logradouro'];
	}
	
	if ( isset($_POST['numero'] )){
	  $numero = $_POST['numero'];
	}
	
	if ( isset($_POST['complemento'] )){
	  $complemento = $_POST['complemento'];
	}
	
	if ( isset($_POST['cep'] )){
	  $cep = $_POST['cep'];
	}
	
	if ( isset($_POST['acao'] )) {
	  $acao = $_POST['acao'];
	}

	if ($acao == '' || $acao == 'Voltar') {

		echo '<br>Nome: <input type="text" name="nome" size="40" value='.$nome.'>';
		echo '<br>CPF: <input type="text" name="cpf" size="12" maxlength="11" value='.$cpf.'>';
		echo '<br>email: <input type="text" name="email" size="40" value='.$email.'>';
		echo '<input type="hidden" name="cidade" value='.$cidade.'>';
		echo '<input type="hidden" name="logradouro" value='.$logradouro.'>';
		echo '<input type="hidden" name="numero" value='.$numero.'>';
		echo '<input type="hidden" name="complemento" value='.$complemento.'>';
		echo '<input type="hidden" name="cep" value='.$cep.'>';
		echo '<br><br>';
		echo '<center><input type="submit" name="acao" value="Proximo"></center>';

	} else if ($acao == 'Proximo') {

		if (empty($nome)){
			$validaNome = '<font color = "red"> * </font>';
			$valid = false;
		}
		
		if (empty($cpf)){
			$validaCpf = '<font color = "red"> * </font>';
			$valid = false;
		}
		
		if (empty($email)){
			$validaEmail = '<font color = "red"> * </font>';
			$valid = false;
		}

		if ($valid == true) {
			echo '<input type="hidden" name="nome" value='.$nome.'>';
			echo '<input type="hidden" name="cpf" value='.$cpf.'>';
			echo '<input type="hidden" name="email" value='.$email.'>';
			echo '<br>Cidade: <input type="text" name="cidade" size="20" value='.$cidade.'>';
			echo '<br>Logradouro: <input type="text" name="logradouro" size="40" value='.$logradouro.'>';
			echo '<br>Numero: <input type="text" name="numero" size="12" maxlength="11" value='.$numero.'>';;
			echo '<br>Complemento: <input type="text" name="complemento" size="20" value='.$complemento.'>';
			echo '<br>CEP: <input type="text" name="cep" size="20" value='.$cep.'>';
			echo '<br><br>';
			echo '<center><input type="submit" name="acao" value="Voltar"></center>';
			echo '<center><input type="submit" name="acao" value="Encerrar"></center>';
		} else {
			echo '<br>Nome: <input type="text" name="nome" size="40" value='.$nome.'>'.$validaNome;
			echo '<br>CPF: <input type="text" name="cpf" size="12" maxlength="11" value='.$cpf.'>'.$validaCpf;
			echo '<br>email: <input type="text" name="email" size="40" value='.$email.'>'.$validaEmail;
			echo '<input type="hidden" name="cidade" value='.$cidade.'>';
			echo '<input type="hidden" name="logradouro" value='.$logradouro.'>';
			echo '<input type="hidden" name="numero" value='.$numero.'>';
			echo '<input type="hidden" name="complemento" value='.$complemento.'>';
			echo '<input type="hidden" name="cep" value='.$cep.'>';
			echo '<br><br>';
			echo '<center><input type="submit" name="acao" value="Proximo"></center>';
		}

	} else if ($acao == 'Encerrar') {
		
		if (empty($logradouro)){
			$validaLogradouro = '<font color = "red"> * </font>';
			$valid = false;
		}
		
		if (empty($cep)){
			$validaCep = '<font color = "red"> * </font>';
			$valid = false;
		}
		
		if (empty($cidade)){
			$validaCidade = '<font color = "red"> * </font>';
			$valid = false;
		}

		if ($valid == true) {
			// MOSTRAR RESULTADO
			echo '<br>Nome: <input type="text" name="nome" size="40" value='.$nome.'>';
			echo '<br>CPF: <input type="text" name="cpf" size="40" value='.$cpf.'>';
			echo '<br>Email: <input type="text" name="email" size="40" value='.$email.'>';
			echo '<br>Cidade: <input type="text" name="cidade" size="40" value='.$cidade.'>';
			echo '<br>Logradouro: <input type="text" name="logradouro" size="40" value='.$logradouro.'>';
			echo '<input type="hidden" name="numero" value='.$numero.'>';
			echo '<input type="hidden" name="complemento" value='.$complemento.'>';
			echo '<input type="hidden" name="cep" value='.$cep.'>';
			echo '<br><br>';
			echo '<center><input type="submit" name="acao" value="Voltar"></center>';
		} else {
			echo '<input type="hidden" name="nome" value='.$nome.'>';
			echo '<input type="hidden" name="cpf" value='.$cpf.'>';
			echo '<input type="hidden" name="email" value='.$email.'>';
			echo '<br>Cidade: <input type="text" name="cidade" size="20" value='.$cidade.'>'.$validaCidade;
			echo '<br>Logradouro: <input type="text" name="logradouro" size="40" value='.$logradouro.'> ' .$validaLogradouro;
			echo '<br>Numero: <input type="text" name="numero" size="12" maxlength="11">';
			echo '<br>Complemento: <input type="text" name="complemento" size="20">';
			echo '<br>CEP: <input type="text" name="cep" size="20"value ='.$cep.'>'.$validaCep;
			echo '<br><br>';
			echo '<center><input type="submit" name="acao" value="Voltar"></center>';
			echo '<center><input type="submit" name="acao" value="Encerra"></center>';
		}

	}
     
?>
    </form>
</html>
