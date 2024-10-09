<?php
function dernierElementTableau($tab){
    $tab=array(0,1,6,68,48);
    if (empty($tab)){
        return null;

    }else {
    return end($tab);
}
}
echo dernierElementTableau($tab);
?>