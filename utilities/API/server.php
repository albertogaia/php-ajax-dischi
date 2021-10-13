<?php
    require_once __DIR__ . '../../DATA/database.php';

    // var_dump($db);
    $tmp = [];
    if (isset($_GET['genere'])){
        $value = $_GET['genere'];
    }else{
        $value = 'all';
    }
    
    foreach($db as $album){
       if ($value == 'all' || $album['genre'] === $value) {
        $tmp[] = $album;
       }
    }

    header('Content-Type: application/json');

    echo json_encode($tmp);
?>