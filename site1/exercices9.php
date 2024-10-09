<?php
function estIlMajeure($arg){
    if ($arg >= 18) {
        return "true";
    } 
    else {
        return false;
    }
}
echo estIlMajeure(5);
echo estIlMajeure(34);
?>