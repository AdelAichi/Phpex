<?php
function premierElementTableau($tab){
    $tab=array(0,1,6,68,48);
    if (empty($tab)){
        return null;

    }else {
    return $tab[0];
}
}
echo premierElementTableau($tab);
?>