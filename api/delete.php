<?php 
require('../config.php');

if(strtolower($_SERVER['REQUEST_METHOD']) === 'delete'){
    $id = filter_input(INPUT_GET, 'id');
    if($id){
        $sql = $pdo->query("DELETE FROM notes WHERE id = $id");
        $array['result'] = "Sucesso!!";
    }else{
        $array['error'] = 'Ooopss... Id não enviado!';
    }
}else{
    $array['error'] = 'Ooopss... Método não permitido! (Somente DELETE)';
}

require('../return.php');