<?php
    session_start();

    // script foi chamado de index.php
    include "../../utilis/conexao.php"; 
    
    // $id_usuario=$_POST["id_usuario"];
    // $nome=$_POST["nome"];
    // $email=$_POST["email"];
    // $senha_=$_POST["senha"];
    // $telefone=$_POST["telefone"];
    // $cpf=$_POST["cpf"];
    // $genero=$_POST["genero"];
    // $datanasc=$_POST["datanasc"];

    $usuario = $_POST["usuario"];
    $senhacripto = MD5($_POST["senha"]);
    
    //$senha = md5($senha); //ou se a senha estiver oculta
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senhacripto' ";

    $res = pg_query($conecta, $sql);


    // $resultado=pg_query($conecta,$sql);
    // $qtde=pg_affected_rows($resultado);



    if (pg_num_rows($res) > 0)
    {
        $linha = pg_fetch_array($res);

        $_SESSION["usuariologado"] = $linha;
        $_SESSION["isadm"] = $linha['adm'];
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.html'>";

        echo '<script language="javascript">';
        echo "alert('você entrou!')";
        echo '</script>';
        // header("Location: conta.html");
        // echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=conta.php'>";

        }
    else
    {
        echo '<script language="javascript">';
        echo "alert('Usuário ou senha inválidos!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_front.php'>";
    }

//   pg_close($conecta);
?>