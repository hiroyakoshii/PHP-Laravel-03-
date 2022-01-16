<?php

$name = 'hiroya';
if ($name == 'hiroya') {
    echo '私は'.$name."です\n";
} else {
    echo "あなたの名前ではありません\n";
}

$total = 0;

for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total."\n";

$fruits = array("banana","mango","apple","orange","lemon");

foreach($fruits as $fruit){
    echo $fruit."\n";
}

$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++){
    
    if($i % 5 == 0){
        echo$i."\n";
    }
}