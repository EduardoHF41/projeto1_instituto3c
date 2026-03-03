<?php
require_once "terminalSystem.php";
function showRegistrations() {
    global $matriz;
    
    if (empty($matriz)) {
        echo "Nenhum aluno cadastrado no momento.\n\n";
        return;
    }

    echo "=== LISTA DE ESTUDANTES ===\n";
    echo str_pad("NOME", 15) . " | " . str_pad("MATRÍCULA", 12) . " | " . str_pad("NOTA", 6) . " | SITUAÇÃO\n";
    echo "------------------------------------------------------------\n";

    foreach ($matriz as $student) {
        echo str_pad($student["name"], 15) . " | " . 
             str_pad($student["id"], 12) . " | " . 
             str_pad($student["grade"], 6) . " | " . 
             strtoupper($student["condition"]) . "\n";
    }
    echo "------------------------------------------------------------\n\n";
    readline("Pressione enter para continuar...");
    system("clear");
}
