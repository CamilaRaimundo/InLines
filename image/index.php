<?php
    session_start();

    if(isset($_SESSION['isAuth'])){
        if($_SESSION['idUser'] != -1) {
            if($_SESSION['access_level'] == 10){
                header("Location: views/principal/principalPage.php");
	            exit();
            }else if($_SESSION['access_level'] == 9){
                header("Location: views/coordinator/coordinatorPage.php");
	            exit();
            }else if($_SESSION['access_level'] == 7){
                header("Location: views/supervisor/supervisorPage.php");
	            exit();
            }else if($_SESSION['access_level'] == 2){
                header("Location: views/professor/professorPage.php");
	            exit();
            }else if($_SESSION['access_level'] == 1){
                header("Location: views/student/studentPage.php");
	            exit();
            }
        }
        else {
            header("Location: views/admin/adminPage.php");
	        exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container min-vh-100">
        <header class="row bg-white">
            <div class="col-8 d-flex align-items-center">
                <img class="w-100 unesp" src="public/images/unesp-logo.png" alt="Logo UNESP">
            </div>
            
            <div class="col-4 pt-3 pb-3 d-flex justify-content-end">
                <img class="w-100 feb" src="public/images/feb-logo.jpg" alt="Logo FEB">
            </div>
        </header>

        <div class="w-100 rounded bg-primary" style="padding: 8em 1em;">
            <div class="text-center">
                <h1 class="text-light mb-5">Controle de Estágio</h1>
                
                <!-- Google Button -->
                <div class="google-login d-flex justify-content-center">
                    <div id="g_id_onload"
                        data-client_id="1045228777906-es2simi3uedv02o8t9t5qs6fs8c268hr.apps.googleusercontent.com"
                        data-context="signin"
                        data-ux_mode="popup"
                        data-login_uri="https://seseedev.unesp.br/app/php/google/verifyIntegrity.php"
                        data-auto_prompt="false">
                    </div>

                    <div class="g_id_signin"
                        data-type="standard"
                        data-shape="pill"
                        data-theme="outline"
                        data-text="signin_with"
                        data-size="large"
                        data-logo_alignment="left">
                    </div>
                </div>
            </div>
        </div>

         <footer class="text-center pt-5 pb-3">
             &copy; 2021 UNESP - Universidade Estadual Paulista "Júlio de Mesquita Filho"
         </footer>
    </div>

    <!-- Bootstrap -->
    <script src="public/bootstrap/bootstrap.min.js"></script>

    <!-- Google API -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <!-- C:\xampp\htdocs\UNESP-Internship\TUC21\index.php -->
</body>
</html>

