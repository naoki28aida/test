<?php

$jin = [
    
    ["ブルーロック", "サッカー漫画", "連載中"],
    ["ドラゴンボール", "バトル漫画", "完結済"],
    ["東京リベンジャーズ", "不良漫画", "完結済"],
    ["鬼滅の刃", "バトル漫画", "完結済"],
    ["ドラえもん", "不朽の名作", "永遠に終わらない"]

];

foreach ($jin as $person)
echo $person[0] . "は" . $person[1] . "で" . $person[2] . "。" . "<br />";