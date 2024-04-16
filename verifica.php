<?php
if ( !isset($_COOKIE["usuario"])){
    echo "<p> È nessesario fazer o login oara acessar o sistema</p>";
    echo "<a href = \"login.php\">Ir para Login</a>";
}

?>