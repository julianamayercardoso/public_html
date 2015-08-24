<html>
    <b><em>Exercicio01</em></b><br>
    <form action="Exercicio01.php" method="POST">
        Nome: <input type="text" name="nome"><br>
			CPF: <input type="text" name="cpf"><br>
			RG: <input type="text" name="rg"><br>
			Data: <input type="text" name="dia">/<input type= "text" name= "mes">/<input type=> <br>
        <input type="hidden" name="acao" value="X">
        <input type="submit" value="Vai!">
    </form>
    <?php
        if (isset($_POST['acao'])){
            if (!isset($_POST['nome'])){
                echo "<br>* Nome não setado!";
            }else if (empty($_POST['nome'])){
                echo "<br>* Nome não preenchido";
            }else{
                echo "<br>Nome: ".$_POST['nome'];
            }
        }


		if (isset($_POST['acao'])){
            if (!isset($_POST['cpf'])){
                echo "<br>* CPF não setado!";
            }else if (empty($_POST['cpf'])){
                echo "<br>* CPF não preenchido";
            }else{
                echo "<br>CPF: ".$_POST['cpf'];
            }
        }

	if (isset($_POST['acao'])){
            if (!isset($_POST['rg'])){
                echo "<br>* RG não setado!";
            }else if (empty($_POST['rg'])){
                echo "<br>* RG não preenchido";
            }else{
                echo "<br>RG: ".$_POST['rg'];
            }
        }

	if (isset($_POST['acao'])){
            if (!isset($_POST['data'])){
                echo "<br>* Data não setado!";
            }else if (empty($_POST['data'])){
                echo "<br>* Data não preenchido";
            }else{
                echo "<br>Data: ".$_POST['data'];
            }
        }
if (isset($_POST['acao'])){
            if (!isset($_POST['dia'])){
                echo "<br>* Dia não setado!";
            }else if (empty($_POST['dia'])){
                echo "<br>* Dia não preenchido";
            }else{
                echo "<br>Dia: ".$_POST['dia'];
            }
        }
if (isset($_POST['acao'])){
            if (!isset($_POST['mes'])){
                echo "<br>* Mes não setado!";
            }else if (empty($_POST['mes'])){
                echo "<br>* Mes não preenchido";
            }else{
                echo "<br>Mes: ".$_POST['mes'];
            }
        }
if (isset($_POST['acao'])){
            if (!isset($_POST['ano'])){
                echo "<br>* Ano não setado!";
            }else if (empty($_POST['ano'])){
                echo "<br>* Ano não preenchido";
            }else{
                echo "<br>Ano: ".$_POST['ano'];
            }
        }
    ?>


</html>





