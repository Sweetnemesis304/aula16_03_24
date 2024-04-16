<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "Milena" && $senha == "123" ){
    setcookie("usuario", $usuario);
    header('location: principal.php');


}
else{
    echo "<p>Usuário ou senha inválidos</p>";
    echo "<a href =\"login.php\"> Fazer Login </a>";

}
?>
