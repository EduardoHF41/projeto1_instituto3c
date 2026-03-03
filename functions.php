<?php
$matriz = [
    ["name" => "edu", "registration" => "1", "grade" => 8, "condition" => "aprovado"],
    ["name" => "vinicius", "registration" => "2", "grade" => 10, "condition"=> "aprovado"],
];
function addStudent(){
    echo "Digite as seguintes informações: \n";
    
    $student["name"] = readline("Nome do estudante:");
    
    $student["registration"] = readline("\nNumero da matricula:");
    
    $grade = readline("\nInsira a nota do aluno:");
    
    $student["grade"] = $grade;
    
    if ($grade < 5){
        $student["condition"] = "reprovado";
    }else if($grade >= 5 && $grade < 7){
        $student["condition"] = "recuperação";
    }else{
        $student["condition"] = "aprovado";
    }

    global $matriz;
    $matriz[] = $student;
    system("clear");
    echo "cadastro realizado com sucesso\n\n";
}

function showRegisters() {
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
             str_pad($student["registration"], 12) . " | " . 
             str_pad($student["grade"], 6) . " | " . 
             strtoupper($student["condition"]) . "\n";
    }
    echo "------------------------------------------------------------\n\n";
}

function searchRegister(){
    global $matriz;
    $key = "registration";
    $search = readline("insira o numero da matricula do aluno:");
    
    $results =  array_filter($matriz, fn($item) => 
        isset($item[$key]) && stripos($item[$key], $search) !== false
    );

    if (empty($results)) {
        echo "Nenhum aluno encontrado com a matrícula: $search\n\n";
    } else {
        echo "=== RESULTADO DA BUSCA ===\n";
        foreach ($results as $student) {
            echo "Nome: " . $student["name"] . "\n";
            echo "Matrícula: " . $student["registration"] . "\n";
            echo "Nota: " . $student["grade"] . "\n";
            echo "Situação: " . strtoupper($student["condition"]) . "\n";
            echo "--------------------------\n";
        }
    }
}



function editRegister(){
    global $matriz;
}