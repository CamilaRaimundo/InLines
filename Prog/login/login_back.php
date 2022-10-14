<?php
    session_start();
    // script foi chamado de index.php
    include "../../utilis/conexao.php"; 

    $usuario = $_POST["usuario"];
    $senhacripto = MD5($_POST["senha"]);
    
    //$senha = md5($senha); //ou se a senha estiver oculta
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senhacripto' ";

    $res = pg_query($conecta, $sql);
    if (pg_num_rows($res) > 0)
    {
        $linha = pg_fetch_array($res);

        $_SESSION["usuariologado"] = $linha;
        $_SESSION["isadm"] = $linha['adm'];
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.html'>";
    }
    else
    {
        echo '<script language="javascript">';
        echo "alert('Usuário ou senha inválidos!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_front.php'>";
    }
?>