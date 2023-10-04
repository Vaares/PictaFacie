<?php 
    if(isset($_POST['submit']) || !empty($_POST['email']) || !empty($_POST['senha'])) {
        // Acesso ao banco de dados
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
        echo ("teste");
        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);

        $result = $conexao->query($sql);

        if($result && $result->rowCount() == 1) {
            // Exibir os dados do array
            echo ("teste");
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>" . " - Senha " . $row["senha"];
            }
        } else {
            echo "Nenhum resultado encontrado.";
        }
    } else {
        // Sem acesso ao banco de dados
        header('location: login.php');
    }
?>
