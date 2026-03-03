<?php
require_once "registration.php";
require_once "registrationEditor.php";
require_once "registrationSearcher.php";
require_once "showRegistrations.php";
require_once "registrationRemover.php";
require_once "statistics.php";
$turnOff = 0;
$matriz = [];
while ($turnOff == 0){
    echo "Bem vindo ao sistema de gerenciamento de alunos!\n";
    echo "================================================\n";
    echo "1) adicionar novo registro\n";
    echo "2) listar registros\n";
    echo "3) buscar registro\n";
    echo "4) editar registro\n";
    echo "5) remover registro\n";
    echo "6) exibir estatisticas\n";
    echo "9) sair do programa\n";

    $menuCode = readline("Digite aqui a opcao escolhida:\n");
    system("clear");
    //testar match
    switch ($menuCode){
        case 1:
            addStudent();
            break;
        case 2:
            showRegistrations();
            break;
        case 3:
            registrationSearcher();
            break;
        case 4:
            registrationEditor();
            break;
        case 5:
            registrationRemover();
            break;
        case 6:
            showStatistics();
            break;
        case 9:
            $turnOff++;
            break;
        default:
            echo "opcao invalida, tente novamente\n\n";
        
    }
};