<?php
function plusGrand($tab){
    $tab=array(0,1,2,10,50);
    if (empty($tab)){
        return null;

    }else {
    return max($tab);
}
}
echo plusGrand($tab);
?>