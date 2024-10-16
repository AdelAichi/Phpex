<?php
function remplacerLesLettres($chaine) {
    $chaine = str_replace('e', '3', $chaine);
    $chaine = str_replace('i', '1', $chaine);
    $chaine = str_replace('o', '0', $chaine);
    return $chaine;
}

echo remplacerLesLettres("Bonjour les amis"); 
echo remplacerLesLettres("Les cours de programmation Web sont trops cools");
