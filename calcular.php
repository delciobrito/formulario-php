<?php
$name = $_GET['f_nome'];
$notaAv1 = $_GET['f_av1'];
$notaAv2 = $_GET['f_av2'];

echo "<p>Nome do aluno: $name</p>";
echo "<p>Nota AV1: $notaAv1</p>";
echo "<p>Nota AV2: $notaAv2</p>";

/*
if(($notaAv1 + $notaAv2)/2 >= 6){
    echo "Situação: APROVADO";
} else{
    echo "Situação: ALUNO EM AV3"; 
}
*/

function calculaMedia($n1, $n2){
    $media = ($n1 + $n2) / 2;
    echo "<p>Média: $media</p>";
    return $media;
}

function situacaoAluno($media){
    if($media >= 6){
        echo "<p>Situação: APROVADO</p>";
    } else {
        echo "<p>Situação: Aluno em AV3</p>";
    }
}

$media = calculaMedia($notaAv1, $notaAv2);
situacaoAluno($media);

?>