<h1>Welcome to our page!</h1>
<?php
echo "<pre>"; print_r($_POST); echo "</pre>";

$login=$_POST["login"];
$senha=$_POST["senha"];

echo "Login: <b>$login</br><br>";
echo "Senha: <b>$senha</br><br>";

?>