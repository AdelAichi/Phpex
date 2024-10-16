<?php

function verificationPassword($arg){
    if (strlen($arg)>=8 && strpbrk($arg, '0123456789') && strpbrk($arg, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')  && 
    strpbrk($arg, 'abcdefghijklmnopqrstuvwxyz')  ){
        return true;
    }else{
        return false;
    }
}
echo verificationPassword(A1bcdefg)

?>
