<?php 
require('../config.php');

if(strtolower($_SERVER['REQUEST_METHOD']) === 'get'){
    $id = filter_input(INPUT_GET, 'id');
    if($id){
        $sql = $pdo->query("SELECT * FROM notes WHERE id = $id");
        if($sql->rowCount() > 0){
            $item = $sql->fetch(PDO::FETCH_ASSOC);
            $array['result'] = [
                'id' => $item['id'],
                'titulo' => $item['titulo'],
                'body' => $item['body']
            ]; 
        }else{
            $array['error'] = 'Ooopss... Nada foi encontrado!';
        }
    }else{
        $array['error'] = 'Ooopss... Id não enviado!';
    }
}else{
    $array['error'] = 'Ooopss... Método não permitido! (Somente GET)';
}

require('../return.php');