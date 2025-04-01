<?php
// Converte o JSON para um array em php
// Lê conteúdo do aruivo JSON
$dados= json_decode(file_get_contents("dados.json"), true);

// Garante que $dados seja um array válido
if(!is_array ($dados)){
    $dados=[];
}

// Captura dados do formulário
$novoDado=[
    "nome"=> $_POST["nome"],
    "idade"=> $_POST["idade"]
];

// Adiciona o novo dado a um array existente
$dados [] = $novoDado;

// Salva o novo JSON no arquivo
// Converte o array php de volta para o formato JSON
file_put_contents("dados.json" , json_encode($dados, JSON_PRETTY_PRINT));

echo "Dados salvos com sucesso! <a href='index.php>Voltar</a>";
?>