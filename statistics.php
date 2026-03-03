<?php

function showStatistics() {
    global $matriz;

    if (empty($matriz)) {
        echo "Nenhum aluno cadastrado para calcular estatísticas.\n\n";
        return;
    }

    $totalStudents = count($matriz);
    $approved = 0;
    $recovery = 0;
    $failed = 0;
    $gradeSum = 0;

    foreach ($matriz as $student) {
        $gradeSum += $student["grade"];
        switch ($student["condition"]) {
            case "aprovado":
                $approved++;
                break;
            case "recuperação":
                $recovery++;
                break;
            case "reprovado":
                $failed++;
                break;
        }
    }

    $averageGrade = number_format($gradeSum / $totalStudents, 2);

    echo "=== ESTATÍSTICAS DOS ALUNOS ===\n";
    echo "Total de alunos: {$totalStudents}\n";
    echo "Aprovados: {$approved}\n";
    echo "Recuperação: {$recovery}\n";
    echo "Reprovados: {$failed}\n";
    echo "Média das notas: {$averageGrade}\n\n";
    readline("Pressione enter para continuar...");
    system("clear");
}