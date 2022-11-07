<?php
    session_start();

    session_unset();
    session_destroy();
    /*if (isset($_SESSION["usuariologado"]))
    {
        session_unset();
        session_destroy();
    }
    else if (isset($_SESSION["isadm"]))
    {
        session_unset();
        session_destroy();
    }*/

    // echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL='../../index.php''>";
    header("Location: login_front.php");
    exit;
?>