<?php


include './libraryToInclude.php';

function getUtilisateursAutorises() {
   
    $utilisateurs = getAllUtilisateurs();

    $utilisateursAutorises = array_filter($utilisateurs, function($utilisateur) {
        if ($utilisateur['bloque']) {
            return false;
        }

        if (empty($utilisateur['email'])) {
            return false;
        }
        if ($utilisateur['age'] < 18) {
            return false;
        }
        return true;
    });
    return $utilisateursAutorises;
}
?>
