<?php
// Solicita ao usuário um número via terminal
echo "Digite um número: ";
$numero = trim(fgets(STDIN));

// Verifica se é um número válido
if (!is_numeric($numero)) {
    echo "Por favor, digite um valor numérico.\n";
    exit;
}

// Processamento: compara com 10
if ($numero > 10) {
    echo "$numero é maior que 10.\n";
} elseif ($numero < 10) {
    echo "$numero é menor que 10.\n";
} else {
    echo "$numero é igual a 10.\n";
}
?>