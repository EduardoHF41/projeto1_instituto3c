<?php
function registrationEditor(){
    global $matriz;

    $index = registrationSearcher();

    if ($index === null) {
        return;
    }

    echo "Deseja editar o registro encontrado? (s/n)\n";
    $editChoice = readline("Digite aqui sua escolha: ");

    if (strtolower($editChoice) === 's') {

        $newName = readline("Digite o novo nome (enter para manter): ");
        $newGrade = readline("Digite a nova nota (enter para manter): ");

        if (!empty($newName)) {
            $matriz[$index]["name"] = $newName;
        }

        if (!empty($newGrade) && is_numeric($newGrade) && $newGrade >= 0 && $newGrade <= 10) {

            $matriz[$index]["grade"] = number_format($newGrade, 1, '.', '');

            $grade = $matriz[$index]["grade"];

            if ($grade < 5){
                $matriz[$index]["condition"] = "reprovado";
            } elseif ($grade < 7){
                $matriz[$index]["condition"] = "recuperação";
            } else {
                $matriz[$index]["condition"] = "aprovado";
            }
        }

        echo "Registro atualizado com sucesso!\n\n";

    } else {
        system("clear");
        echo "Edição cancelada.\n\n";
        readline("Pressione enter para continuar...");
        system("clear");
    }
}