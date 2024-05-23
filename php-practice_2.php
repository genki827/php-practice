<?php
// Q1 tic-tac問題
<?php
echo "1から100までのカウントを開始します"."\n";
for ($i = 1; $i <= 100; $i++){
    if ($i % 4 === 0 and $i % 5 === 0) {
        echo "tic-tac" ,"\n";
    }elseif($i % 4 === 0){
        echo "tic" ,"\n";
    }elseif ($i % 5 === 0) {
        echo "tac" ,"\n";
    }else {
        echo $i ,"\n";
    }
}
?>
// Q2 多次元連想配列
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//Q2-1
echo $personalInfos[1]['name'], "電話番号は" , $personalInfos[1]['tel'] ,"です。";

$i = 0;
$num = 1;

//Q2-2
foreach ($personalInfos as $g => $s){
    echo $num, "の", $personalInfos[$i]['name'], "のメールアドレスは", $personalInfos[$i]['mail'], "電話番号は", $personalInfos[$i]['tel'], "です。"."\n";
    $num++;
    $i++;
}

//Q2-3
for($i = 0; $i < count($personalInfos); $i++){
  foreach ($personalInfos as $g => $s){
      $personalInfos[$i]['age'] = $ageList[$i];
  }
}

var_dump($personalInfos);
?>
// Q3 オブジェクト-1
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend()
    {
        echo '授業に出席しました。';
    }
    
}
$obj = new Student(120,"山田");
//問題1
echo "学生番号", $obj->studentId, "の生徒は", $obj->studentName, "です。"."\n";
?>
// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend($php)
    {
        echo $this->studentName, "は", $php, 'の授業に出席しました。', "学籍番号:", $this->studentId;
    }
    
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');
?>
// Q5 定義済みクラス
<?php
//問題1
$date = new DateTime();
echo $date->format('Y-m-d');
//問題2
$date2 = new DateTime('1992-04-25');

$diff = $date2->diff($date);
echo "あの日から", $diff->days, "日経過しました。";
?>
?>