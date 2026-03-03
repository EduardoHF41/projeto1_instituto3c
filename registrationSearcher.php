<?php
function registrationSearcher(){
    global $matriz;

    $search = readline("Insira o número da matrícula do aluno: ");

    if (!empty($search) && is_numeric($search)) {

        foreach ($matriz as $index => $student) {
            if ($student["id"] == $search) {

                echo "=== RESULTADO DA BUSCA ===\n";
                echo "Nome: {$student["name"]}\n";
                echo "Matrícula: {$student["id"]}\n";
                echo "Nota: {$student["grade"]}\n";
                echo "Situação: " . strtoupper($student["condition"]) . "\n";
                echo "--------------------------\n";
                readline("Pressione enter para continuar...");
                system("clear");
                return $index;
            }
        }
    }

    echo "Nenhum aluno encontrado.\n\n";
    readline("Pressione enter para continuar...");
    system("clear");
    return null;
}