<?php
$name = $_GET['f_nome'];
$notaAv1 = $_GET['f_av1'];
$notaAv2 = $_GET['f_av2'];

echo "<p>Nome do aluno: $name</p>";
echo "<p>Nota AV1: $notaAv1</p>";
echo "<p>Nota AV2: $notaAv1</p>";

/*
if(($notaAv1 + $notaAv2)/2 >= 6){
    echo "Situação: APROVADO";
} else{
    echo "Situação: ALUNO EM AV3"; 
}
*/

function media($a, $b){
    $media = ($a + $b) / 2;
    return $media;
}

if(media($notaAv1, $notaAv2) >= 6){
    echo "Situação: APROVADO";
} else {
    echo "Situação: Aluno na AV3";
}

?>