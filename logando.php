
<?php

include 'connect.php';

$email = $_POST["email"];
$senha = $_POST["senha"];
$senha = crypt($senha, "salt");

$conexao = mysqli_connect("localhost", "usuario", "123", "revisao");

$consulta = mysqli_query($conexao, "SELECT * FROM tabela WHERE email='$email' AND senha='$senha'") or die(mysqli_error($conexao));

  $contagem = mysqli_num_rows($consulta);

if($contagem > 0){
    echo "ACESSO GARANTIDO";
    session_start();
    $exibir = mysqli_fetch_array($consulta);
    $_SESSION["acesso"]="true";
    $_SESSION["id"] = $exibir["id"];
//echo "session: " . $_SESSION["id"];
    header("location: login/login.php");
}else {
    echo "ACESSO NEGADO";
    header("location: login.php");

}

?>
