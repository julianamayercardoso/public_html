<html>
    <b><em>Formulário 02</em></b><br>
    <form action="formulario02.php" method="POST">
        Nome:<input type="text" name="nome"><br>
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
    ?>


</html>



















