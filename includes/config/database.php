<?php

function conetarDB():mysqli {
    $db = new mysqli( 'localhost', 'root', '', 'db_bienes_raices' );

    if ( !$db ) {
        echo 'Error no se pudo conectar';
        exit;
    }

    return $db;
}