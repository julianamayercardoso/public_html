<html>
    <b><em>Exercicio01</em></b><br>
<fieldset>
    <form action="Exercicio01.php" method="POST">
        Nome: <input type="text" name="nome"><br>
			CPF: <input type="text" name="cpf"><br>
			RG: <input type="text" name="rg"><br>
			Data: <input type="text" name="dia"size = "2" maxlength="2">
			<input type="text" name="mes"size = "2" maxlength="2">
			/<input type="text" name="ano"size = "4" maxlength="4"> <br> <br>
         /<input type="submit" value="Enviar">
</fieldset>
    </form>
    <?php
        if (isset($_POST['acao'])){
            if (!isset($_POST['nome'])){
                echo "<br> Nome não setado!";
            }else if (empty($_POST['nome'])){
                echo "<br> Nome não preenchido";
            }else{
                echo "<br>Nome: ".$_POST['nome'];
            }
        }


		if (isset($_POST['acao'])){
            if (!isset($_POST['cpf'])){
                echo "<br> CPF não setado!";
            }else if (empty($_POST['cpf'])){
                echo "<br> CPF não preenchido";
            }else{
                echo "<br>CPF: ".$_POST['cpf'];
            }
        }

	if (isset($_POST['acao'])){
            if (!isset($_POST['rg'])){
                echo "<br> RG não setado!";
            }else if (empty($_POST['rg'])){
                echo "<br> RG não preenchido";
            }else{
                echo "<br>RG: ".$_POST['rg'];
            }
        }

	
if (isset($_POST['acao'])){
            if (!isset($_POST['dia'])){
                echo "<br> Dia não setado!";
            }else if (empty($_POST['dia'])){
                echo "<br> Dia não preenchido";
            }else{
                echo "<br>Dia: ".$_POST['dia'];
            }
        }
if (isset($_POST['acao'])){
            if (!isset($_POST['mes'])){
                echo "<br> Mes não setado!";
            }else if (empty($_POST['mes'])){
                echo "<br> Mes não preenchido";
            }else{
                echo "<br>Mes: ".$_POST['mes'];
            }
        }
if (isset($_POST['acao'])){
            if (!isset($_POST['ano'])){
                echo "<br> Ano não setado!";
            }else if (empty($_POST['ano'])){
                echo "<br> Ano não preenchido";
            }else{
                echo "<br>Ano: ".$_POST['ano'];
            }
        }
    ?>


</html>





