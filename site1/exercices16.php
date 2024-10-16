<?php
function plusPetit($tab){
    $tab=array(0,1,2,10,50);
    if (empty($tab)){
        return null;

    }else {
    return min($tab);
}
}
echo plusPetit($tab);
?>