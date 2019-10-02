<?php

//文字入れても使える・・・
//YmdHisはばらばらでも使える
$d = date("s");
// $d =20;

if($d > 0 && $d <30){
    echo '<style>';
    echo 'body{background: red;}';
    echo '</style>';
}else{
    echo '<style>';
    echo 'body{background: black;}';
    echo 'body{color: white;}';
    echo '</style>';
}

echo $d;

?>