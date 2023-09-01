<?php 
require('../config.php');

if(strtolower($_SERVER['REQUEST_METHOD']) === 'put'){
    parse_str(file_get_contents('php://input'), $input);
    $id = filter_var($input['id']??null);
    $titulo = filter_var($input['titulo']??null);
    $body = filter_var($input['body']??null);

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
    $array['error'] = 'Ooopss... Método não permitido! (Somente PUT)';
}

require('../return.php');