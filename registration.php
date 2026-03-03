<?php
require_once "terminalSystem.php";
function addStudent(){
    global $matriz;
    echo "Digite as seguintes informações: \n";
    while (true) {
        $studentName = readline("Nome do estudante:");
        if (!empty($studentName) && gettype($studentName) === "string" && preg_match('/^[a-zA-Z\s]+$/', $studentName)) {
            break;
        }
        echo "O nome do estudante não pode ser vazio. Por favor, tente novamente.\n";
    }
    $student["name"] = $studentName;
    $grade = readline("\nInsira a nota do aluno:");
    
    while (!is_numeric($grade) || $grade < 0 || $grade > 10) {
        echo "Nota inválida. Por favor, insira um número entre 0 e 10.\n";
        $grade = readline("Insira a nota do aluno:");
    }
    $grade = number_format($grade, 1, '.', '');
    $student["grade"] = $grade;
    
    if ($grade < 5){
        $student["condition"] = "reprovado";
    }else if($grade >= 5 && $grade < 7){
        $student["condition"] = "recuperação";
    }else{
        $student["condition"] = "aprovado";
    }
    
    
        
    $student["id"] = generateid();
        
    $matriz[] = $student;
    system("clear");
    echo "cadastro realizado com sucesso\n\n";
    readline("Pressione enter para continuar...");
    system("clear");
}

function generateid() {
    global $matriz;

    if (empty($matriz)) {
        return 1;
    }

    $lastid = 0;

    foreach ($matriz as $student) {
        if ((int)$student["id"] > $lastid) {
            $lastid = (int)$student["id"];
        }
    }

    return $lastid + 1;
}