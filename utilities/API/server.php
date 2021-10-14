<?php
    require_once __DIR__ . '../../DATA/database.php';

    // Istanzio una nuova variabile che conterrà la lista richiamata
    $filteredList = [];

    // Controllo che venga utilizzata la query con ?genere= e do il valore che ha passato l'utente ad una variabile chiamata $value. Se non esiste la query allora do un valore 'all' alla value.
    if (isset($_GET['genere'])){
        $value = $_GET['genere'];
    }else{
        $value = '';
    }


    // per ciascuno album nel db controlliamo che il valore passato dall'utente sia uguale al genere dell'album e così popoliamo l'array
    foreach($db as $album){
       if ($value == '' || $album['genre'] === $value) {
        $filteredList[] = $album;
       }
    }

    header('Content-Type: application/json');

    // passiamo la nuova lista filtrata
    echo json_encode($filteredList);
?>