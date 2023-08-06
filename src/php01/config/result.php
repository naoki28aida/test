<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$address = htmlspecialchars($_POST["address1"], ENT_QUOTES);
$address2 = htmlspecialchars($_POST["address2"], ENT_QUOTES); // address2も別の変数に格納
$goodz = htmlspecialchars($_POST["goodz"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

echo "私の名前は、" . $name . "<br />";
echo "住所は、" . $address . $address2 . "<br />"; // address2も出力
echo "ご希望の商品は、" . $goodz . "<br />";
echo "注文数は、" . $number . "<br />";