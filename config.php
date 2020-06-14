<?php

session_start(); //Inicia uma nova sessão ou resume uma sessão existente
//dados de acesso ao banco
$local = "34.95.220.141";

$usuario_BD = "root";
$senha_BD = "1vdwsGhkOhkmhnAx";
$base = "bprojeto";

//conexão ao banco
$tenta_conectar = new mysqli($local, $usuario_BD, $senha_BD, $base);
if ($tenta_conectar->connect_error) {
    die("Conexão falhou: " . $tenta_conectar->connect_error . "<br>");
}
echo "Conexão realizada com sucesso";

if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];

    // Inserir registro
    $sql = "INSERT INTO cadastro (nome, senha,email,tipo)
 VALUES ('$nome', '$senha', '$email', '$tipo')";
    if ($tenta_conectar->query($sql) === TRUE) {
        echo "<script> 
                alert('Usuário Cdastrado com Sucesso');
                window.location.href = 'index.php';
            </script>";
        
    } else {
        echo "Erro: " . $sql . "<br>" . $tenta_conectar->error . "<br>";
    }
}
//SELECT PARA LOGIN
if (isset($_POST['submit'])) {
    $email = $_POST['email']; //obtém o login digitado
    $senha = $_POST['senha']; //obtém a senha digitada
    //
    //    verificação de login e senha estão corretos
    $tenta_achar = "SELECT nome, tipo, email FROM cadastro WHERE email='$email' AND senha='$senha'";
    $resultado = $tenta_conectar->query($tenta_achar);
//    if ($resultado->num_rows > 0) {
//        
//        $_SESSION['email'] = $email;
//        $_SESSION['senha'] = $senha;
//        
//       
//        header('location:index.php');//redireciona para a página de acesso
//    }
    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            $tipo = $linha['tipo'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $senha = $linha['senha'];
            $_SESSION['nome'] = $nome;
            $_SESSION['tipo'] = $tipo;
//        echo $linha['nome'];
//        echo $linha['tipo'];
//        echo $linha['email'];
            ;

            header("location:index.php"); //redireciona para a página de acesso
        }
    } else {
        session_unset(); //remove todas as variáveis de sessão
        session_destroy(); //destroi a sessão
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'index.php';
            </script>";
    }
}

//SELECT PARA VISALIZAR CADASTROS
if (isset($_POST['pesquisar'])) {
    $pesquisanome = $_POST['usuario'];
    $sql = "SELECT id, nome, email, tipo, senha FROM cadastro WHERE nome LIKE '%" . $pesquisanome . "%';";
    $resultado = $tenta_conectar->query($sql);
}


//SELECT PARA VISUALIZAR PARA ATIALIZAR
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id, nome, email, tipo, senha FROM cadastro WHERE id='$id';";
    $resultado = $GLOBALS['tenta_conectar']->query($sql);
    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            $dados['id'] = $linha['id'];
            $dados['nome'] = $linha['nome'];
            $dados['email'] = $linha['email'];
            $dados['senha'] = $linha['senha'];
            $dados['tipo'] = $linha['tipo'];
        }
    }
}

//    UPDATE 
if (isset($_POST['atualizar'])) {
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $senha = $_POST['senha'];


    $sql = "UPDATE cadastro SET nome='$nome', email='$email', tipo='$tipo', senha='$senha' WHERE id='$id'";
    if ($resultado = $tenta_conectar->query($sql) === TRUE) {
        echo "<script> 
                alert('Atualizado com sucesso');
               
            </script>";
    }
}

//   DELETE
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM cadastro WHERE id='$id'";
    if ($tenta_conectar->query($sql) == TRUE) {
        echo "<script> 
                alert('Deletado com sucesso');
               window.location.href = 'gerenciar.php';
            </script>";
    }
}

$tenta_conectar->close();
?>
