<?php 
 include ('conexao.php');

 if(isset($_POST['email']) isset($_POST['senha']))
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d87347ab60.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/form-container.css">
    <link rel="stylesheet" href="css/login-container.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/form-title.css">
    <link rel="stylesheet" href="css/social-icon.css">
    <link rel="stylesheet" href="css/form-social.css">
    <link rel="stylesheet" href="css/form-input-container.css">
    <link rel="stylesheet" href="css/form-input.css">
    <link rel="stylesheet" href="css/form-button.css">
    <link rel="stylesheet" href="css/overlay-container.css">
    <link rel="stylesheet" href="css/overlay.css">
    <link rel="stylesheet" href="css/mobile-text.css">
    <link rel="stylesheet" href="css/light.css">
    <link rel="stylesheet" href="background.png">
    <link rel="stylesheet" href="css/menu.css">
    <!-- Defer usado para fazer o script esperar o html ser carregado totalmente,
usado para não dar erro no codigo. -->
    <script src="js/login.js" defer></script>
    <title>Picta Facie</title>
</head>
<style>
    body {
        background-image: url(background.gif);
        background-repeat: repeat;
    }
</style>

<body>

    <main>
        <!-- Voltar para o menu principal --->
        <div class="menu">
            <ul>
                <li>
                    <a href="#" class="menu-icons">
                        <span class="icon">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </span>
                        </i>
                    </a>

                </li>
            </ul>

        </div>
        <div class="fundo.css"></div>
        <div class="light container"></div>
        <div class="login-container" id="login-container">
            <div class="form-container">
                <form action="" method="POST" class="form form-login">
                    <br>
                    <h2 class="form-title">Entrar com</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-facebook">
                            </i>
                        </a>

                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google">
                            </i>
                        </a>
                    </div>
                    <p class="form-text">Ou utilize sua conta</p>
                    <div class="form-input-container">
                        <input type="email" class="form-input" placeholder="Email">
                        <input type="password" id="password" name="senha" class="form-input" placeholder="Senha">
                        <img src="eye-open.png" id="eyeicon" class="form-input-icon">
                    </div>
                    <a href="#" class="form-link">Esqueceu a Senha?</a>
                    <button class="form-button">Logar</button>
                    <p class="mobile-text">Não tem conta?
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>
                    <br>
                </form>
                <form action="" method="POST" class="form form-reg">
                    <br>
                    <h2 class="form-title">Criar Conta</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-facebook">
                            </i>
                        </a>

                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google">
                            </i>
                        </a>
                    </div>
                    <p class="form-text">Ou cadastre com seu email</p>
                    <div class="form-input-container">
                        <input type="nome" class="form-input" placeholder="Nome">
                        <input type="email" class="form-input" placeholder="Email">
                        <input type="password" id="password2" name="senha" class="form-input" placeholder="Senha">
                        <img src="eye-close.png" id="eyeicon2" class="form-input-icon2">
                    </div>
                    <button type="button" class="form-button">Cadastrar</button>
                    <br>
                    <p class="mobile-text">Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Já tem conta?</h2>
                    <p class="form-text">Para entrar faça o login com suas informações de usuário</p>
                    <button class="form-button form-button-light" id="open-login">Entrar</button>
                </div>
                <div class="overlay">
                    <h2 class="form-title form-title-light">Olá, Usuário</h2>
                    <p class="form-text">Cadastre-se e comece a usar nossa plataforma</p>
                    <button class="form-button form-button-light" id="open-register">Cadastrar</button>
                </div>
            </div>
        </div>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        eyeicon = document.getElementById("eyeicon");
        password = document.getElementById("password");

        eyeicon.onclick = function () {
            if (password.type == "password") {
                password.type = "text";
                eyeicon.src = "eye-open.png";
            }
            else {
                password.type = "password";
                eyeicon.src = "eye-close.png"
            }
        }

        eyeicon2 = document.getElementById("eyeicon2");
        password2 = document.getElementById("password2");

        eyeicon2.onclick = function () {
            if (password2.type == "password") {
                password2.type = "text";
                eyeicon2.src = "eye-open.png";
            }
            else {
                password2.type = "password";
                eyeicon2.src = "eye-close.png"
            }
        }

    </script>
</body>

</html>
