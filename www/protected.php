<?php
    session_start();
    if(!isset($_SESSION['suid'])) {
        die('Erreur d\'authentification');
    } else {
        …
    }
?>