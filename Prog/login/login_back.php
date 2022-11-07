<?php
    session_start();

    // script foi chamado de index.php
    include "../../utilis/conexao.php"; 
    

    $usuario = $_POST["usuario"];
    $senhacripto = MD5($_POST["senha"]);
    
    
    //$senha = md5($senha); //ou se a senha estiver oculta
    $sql = "SELECT * FROM usuario WHERE email = '$usuario' AND senha = '$senhacripto' ";

    $res = pg_query($conecta, $sql);


    // $resultado=pg_query($conecta,$sql);
    // $qtde=pg_affected_rows($resultado);



    if (pg_num_rows($res) > 0)
    {
        $linha = pg_fetch_array($res);
        
        $_SESSION["usuariologado"] = $linha;
        $_SESSION["usuarioemail"] = $_SESSION['usuariologado']['email'];
        if($usuario == 'adm01_inlines_cti@gmail.com')
        {   
            $_SESSION["isadm"] = $linha['adm'];
            echo '<script language="javascript">';
            echo "alert('Você entrou como ADM!')";
            echo '</script>';
        }
        else{ 
            echo '<script language="javascript">';
            echo "alert('Você entrou!')";
            echo '</script>';
        }
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
        //echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../venda/selecao_produtos_front.php'>";

        // echo '<script language="javascript">';
        // echo "alert('Você entrou!')";
        // echo '</script>';
        // header("Location: conta.html");
        // echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=conta.php'>";

    }

    else if($senhacripto != $_POST["senha"])
    {
        echo '<script language="javascript">';
        echo "alert('Senha incorreta.')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_front.php'>";
    }

    else if($usuario != $_POST["usuario"])
    {
        echo '<script language="javascript">';
        echo "alert('E-mail incorreto.')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_front.php'>";
    }


//   pg_close($conecta);
?>