<?php
require_once "functions.php";
$turnOff = 0;

while ($turnOff == 0){
    echo "Escolha uma das seguintes opções \n";
    echo "__________________________________\n";
    echo "1) adicionar novo registro\n";
    echo "2) listar registros\n";
    echo "3) buscar registro\n";
    echo "4) editar registro\n";
    echo "5) remover registro\n";
    echo "5) exibir estatisticas\n";
    echo "9) sair do programa\n";

    $menuCode = readline("Digite aqui a opcao escolhida:\n");
    system("clear");
    //testar match
    switch ($menuCode){
        case 1:
            addStudent();
            break;
        case 2:
            showRegisters();
            break;
        case 3:
            searchRegister();
            break;
        case 4:
            editRegister();
            break;
        case 9:
            $turnOff++;
        
    }
};