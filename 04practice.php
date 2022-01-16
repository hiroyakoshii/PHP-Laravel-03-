<?php

function sum($max){
    $result = 0;
    
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    
    return $result;
}

echo sum(100)."\n";

echo "04課題"."\n";

function double($num1){
    
    echo $num1 * 2;
}

double(100);

echo "\n";

function twice($num2){
    
    $result = $num2 * 2;

return $result;
}

echo twice(50)."\n";

function add($a,$b){
    
    $total = $a + $b;
    
    return $total;
}

echo add(3,4)."\n";

function multi_array($arr){
    
    $all= 1;
    
    foreach($arr as $a){
        
        $all *= $a;
    }
    return $all;
}

echo multi_array(array(1,3,5,7,9))."\n";

function max_aaray($arr){
    
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_aaray(array(4,6,69,65,44))."\n";

//strip_tagsは文字列からHTMLタグを取り除く

$text = '<p>タグを取り除く</p><a href="#">タグを取り除かない</a>';
echo strip_tags($text,'<a>')."\n";

//array_pushは配列の最後に１つ以上の要素を追加、プログラム途中で要素数が可変する際などに使用される。

$members = array("taro","jiro","hana");
array_push($members,"yume","mikami");
print_r($members)."\n";

//array_mergeは複数の配列をマージする。
$east = ["a"=> 1,"b"=> 2,"c"=> 3];
$west = ["c"=> 3,"d"=> 4];
$national = array_merge($east, $west);
print_r($national);

//time関数は現在時刻のUNIXタイムスタンプを取得できる、mktime関数は指定した日時のUNIXタイムスタンプを取得できる。


date_default_timezone_set("Asia/Tokyo");

echo date("Y年m月d日H時i分s秒")."\n";

echo time()."\n";

//         (時,分,秒,月,日,年)
echo mktime(22,30,0,1,16,2022)."\n";

echo mktime(22,30,0)."\n";
//date関数は日付や曜日などを出力する
echo date("Y/m/d",time())."\n";

echo date("Y/m/d",mktime(22,30,0))."\n";

echo date("Y/m/d",strtotime(2022-1-16))."\n";
?>