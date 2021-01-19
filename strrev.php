<?php
function strcon($s){
    $str_arr = array();
    for ($i=strlen($s);$i>0;$i--){
        echo ($s[$i-1]."\n");
        array_push($str_arr,$s[$i-1]);
    }
    var_dump($str_arr);
}
strcon('abcdfghj');


?>