<?php
function test($n1,$n2,$n3){
  $ten = $n1 + $n2 + $n3;
  if($ten >= 200){
    return "合格点は200点以上で、今回の点数は" . $ten . "点のため合格とする";
  }elseif($ten > 50 && $ten < 200 ){
    return "合格点は200点以上で、今回の点数は" . $ten . "点のため頑張ったけど不合格とする";
  }else{
    return $ten . "点はわけわかんないので不合格とする";
  }
  }

echo test(50,80,90) . "<br />";
echo test(50,32,99) . "<br />";
echo test(5,5,9) . "<br />";