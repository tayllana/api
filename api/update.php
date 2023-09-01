<?php 
require('../config.php');

if(strtolower($_SERVER['REQUEST_METHOD']) === 'put'){
    parse_str(file_get_contents('php://input'), $input);
    $id = $input['id']??null;
    $titulo = $input['titulo']??null;
    $body = $input['body']??null;
    
    if($titulo && $body && $id){
        $sql = $pdo->prepare("UPDATE notes SET titulo = :titulo, body = :body WHERE id = :id");
        $sql->bindValue(':id', $id);
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