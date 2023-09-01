<?php 
require('../config.php');

if(strtolower($_SERVER['REQUEST_METHOD']) === 'post'){
    $titulo = filter_input(INPUT_GET, 'titulo');
    $body = filter_input(INPUT_GET, 'body');
    if($titulo && $body){
        $sql = $pdo->prepare("INSERT INTO notes (titulo, body) VALUES (:titulo, :body)");
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':body', $body);
        $sql->execute();

        $array['result'] = 'Sucesso!!'; 
    }else{
        $array['error'] = 'Ooopss... Valores não enviados!';
    }
}else{
    $array['error'] = 'Ooopss... Método não permitido! (Somente POST)';
}

require('../return.php');