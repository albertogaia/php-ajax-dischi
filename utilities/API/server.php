<?php
    require_once __DIR__ . '../../DATA/database.php';

    header('Content-Type: application/json');

    echo json_encode($db);
?>