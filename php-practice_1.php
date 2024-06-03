// Q1 変数と文字列
<?php
$name = '後藤';

echo '私の名前は「' , $name , '」です。';
?>
// Q2 四則演算
<?php
$num = 5*4;

echo $num,"\n",$num/2;
?>
// Q3 日付操作
<?php
date_default_timezone_set('Asia/Tokyo');
echo "現在時刻は、", date('Y年m月m日 G時i分s秒') ,"です"; 
?>
// Q4 条件分岐-1 if文
<?php
$device = "windows";

if ($device === "windows" or $device === "mac"){
   echo "使用OSは、", $device, "です。";
}else{
    echo "どちらでもありません";
}
?>
// Q5 条件分岐-2 三項演算子
<?php
$age = 17;

if($age < 18){
    echo "未成年です。";
} elseif ($age >= 18){
    echo "成人です。";
}
?>
// Q6 配列
<?php
$kantou = [
    
'茨木県',
'栃木県',
'群馬県',
'埼玉県',
'千葉県',
'東京都',
'神奈川県'
];

echo $kantou[2], "と" , $kantou[3] , "は関東地方の都道府県です。";
?>
// Q7 連想配列-1
<?php
$kantou = [
'東京都' => '新宿区',
'神奈川県' => '横浜市',
'千葉県' => '千葉市',
'埼玉県' => 'さいたま市',
'栃木県' => '宇都宮市',
'群馬県' => '前橋市',
'茨木県' => '水戸市'
];

foreach ($kantou as $value){
    echo $value."\n";
}
?>
// Q8 連想配列-2
<?php
$kantou = [
'東京都' => '新宿区',
'神奈川県' => '横浜市',
'千葉県' => '千葉市',
'埼玉県' => 'さいたま市',
'栃木県' => '宇都宮市',
'群馬県' => '前橋市',
'茨木県' => '水戸市'
];

foreach ($kantou as $key => $value){
    if($key === "埼玉県"){
        echo $key , "の県庁所在地は" , $value , "です";
        break;
    }
}
?>
// Q9 連想配列-3
<?php
$ken = [
'東京都' => '新宿区',
'神奈川県' => '横浜市',
'千葉県' => '千葉市',
'埼玉県' => 'さいたま市',
'栃木県' => '宇都宮市',
'群馬県' => '前橋市',
'茨木県' => '水戸市',
'愛知県' => '名古屋市',
'大阪府' => '大阪市'
];

foreach ($ken as $key => $value){
        if ($key === "愛知県" or $key === "大阪府") {
           echo $key , "は関東地方ではありません","\n";
           continue;
        }else{
           echo $key , "の県庁所在地は" , $value , "です","\n"; 
        }
}
?>
// Q10 関数-1
<?php
function hello($name)
{
    return  "{$name}さん、こんにちは。"."\n";
}

echo hello("金谷");
echo hello("安藤");
?>
// Q11 関数-2
<?php
$price = 1000;
$taxInPrice = 0;

function calcTaxInPrice($price)
{
    return $price + $price*0.1;
}

$taxInPrice = calcTaxInPrice($price);
echo $price ,"の商品の税込価格は" ,$taxInPrice ,"円です。";
?>
// Q12 関数とif文
<?php
$num = 0;
$message;

function distinguishNum($num)
{
   if($num%2 === 0){
       $message = "{$num}は偶数です。";
       return $message;
   }else{
       $message = "{$num}は奇数です。";
       return $message;
   }
}

echo distinguishNum($num);
?>
// Q13 関数とswitch文
<?php
$Grades = "A";
$result;

function evaluateGrade($Grades){
    if($Grades === "A" || $Grades === "B"){
        return "合格です。"."\n";
    } elseif ($Grades === "C"){
        return "合格ですが追加課題があります。"."\n";
    } elseif ($Grades === "D"){
        return "不合格です。"."\n";
    } else {
        return "判定不明です。講師に問い合わせてください。"."\n";
    }
}

$result = evaluateGrade("A");

echo $result;

$result = evaluateGrade("E");

echo $result;
?>