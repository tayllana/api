<?php 
require('../config.php');

if(strtolower($_SERVER['REQUEST_METHOD']) === 'get'){
    $sql = $pdo->query("SELECT * FROM notes");
    if($sql->rowCount() > 0){
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $key => $item) {
            $array['result'][] = [
                'id' => $item['id'],
                'titulo' => $item['titulo'],
                'body' => $item['body']
            ];            
        }
    }
}else{
    $array['error'] = 'Ooopss... Método não permitido! (Somente GET)';
}

require('../return.php');