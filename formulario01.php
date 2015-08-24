<html>
    <b><u>Formulário 01</u></b><br>
    <form action="formulario01.php" method="GET">
        Nome:<input type="text" name="nome"><br>
        <input type="hidden" name="acao" value="X ">
        <input type="submit" value="Vai!">
    </form>
 
    <?php
        if (!isset($_GET['acao'])){
            echo "<br>* Ação não definida!";
        }else{
            if (empty($_GET['acao'])){
                echo "<br>* Ação vazia!";
            }else{
                echo '<br>Ação é '.$_GET['acao'];
            }
        }
        if (!isset($_GET['nome'])){
            echo "<br>* Nome não definido!";
        }else{
            if (empty($_GET['nome'])){
                echo "<br>* Nome não preenchido!";
            }else{
                echo '<br>Nome: '.$_GET['nome'];
            }
        }
    ?>
</html>
