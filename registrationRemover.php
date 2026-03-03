<?php

function registrationRemover() {
    global $matriz;

    $index = registrationSearcher();

    if ($index === null) {
        return;
    }

    echo "Deseja remover o registro encontrado? (s/n)\n";
    $removeChoice = readline("Digite aqui sua escolha: ");

    if (strtolower($removeChoice) === 's') {
        array_splice($matriz, $index, 1);
        echo "Registro removido com sucesso!\n\n";
        readline("Pressione enter para continuar...");
        system("clear");
    } else {
        system("clear");
        echo "Remoção cancelada.\n\n";
        readline("Pressione enter para continuar...");
        system("clear");
    }
}