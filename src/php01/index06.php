<?php
function test($num1, $num2, $num3)
{
    $ten = $num1 + $num2 + $num3;
    if ($ten >210 && $ten <300){
    echo $ten . "点は200点以上かつ300点以下なので合格です。";
}else {
    echo $ten . "点なので不合格です";
  }
}
echo test(80, 60, 90);