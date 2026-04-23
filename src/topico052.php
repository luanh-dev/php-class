<?php

$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade";
} else {
    echo "Você é menor de idade";
}

// Corrigido: O echo deve estar dentro das tags PHP
echo "<hr>"; 

$semaforo = "verde"; 

if ($semaforo == "verde") {
    echo "passe";
} elseif ($semaforo == "amarelo") {
    echo "atencao";
} else {
    echo "pare";
}

echo "<hr>";

switch ($semaforo) {
    case "verde":
        echo "siga";
        break;
    case "amarelo":
        echo "atencao";
        break;
    case "vermelho":
        echo "pare";
        break;
    default:
        echo "cor desconhecida";
}

echo "<hr>"; // Adicionado para separar do próximo bloco

$diaSemana = date('w'); 

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}

echo "<hr>";

date_default_timezone_set('America/Sao_Paulo');

?>

<?php
$nome = "uninove";
echo "nome = $nome";
echo "<br>MD5 = " . md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "Hash = $hash"; // Adicionado o ";" aqui
?>