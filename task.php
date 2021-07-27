# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

<?php
print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載
  array_push($names,"斎藤");
  print_r($names);
?>

echo PHP_EOL;

<?php
print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

# 以下に回答を記載
  $array = array_merge($array1, $array2);
  print_r($array);
?>

echo PHP_EOL;

<?php

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

  # 以下に回答を記載
  $target = 3;
  $count = 0;
      foreach($numbers as $number){
          if($number == $target){
              $count +=1;
          }
      }
      echo '回数は、'.$count;
  ?>

echo PHP_EOL;


<?php

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
$sports = str_replace('null', '', $sports);
$sports = array_filter($sports);
print_r($sports);

?>


echo PHP_EOL;

<?php
print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
  if (empty($array1)) {
    echo 'true'.PHP_EOL;
    }else{
    echo 'false'.PHP_EOL;
    }
    
    if (empty($array2)) {
    echo 'true'.PHP_EOL;
    }else{
    echo 'false'.PHP_EOL;
    }
echo PHP_EOL;

?>

<?php

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載

  foreach ($numbers1 as $key => $value) {
    $numbers2[$key] = $value * 10;
} 

print_r($numbers2);

echo PHP_EOL;

?>

<?php

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
  $array = array_map('intval', $array);

  # 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

?>

<?php
print("#####q8#####".PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

  # 以下に回答を記載
$upper_case_programming_languages = ["php", "ruby", "python", "javascript"];

$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $upper_case_programming_languages);

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

?>

<?php
print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
function show($member_no, $names2)
{
  return "会員No.{$member_no} {$names2}";
}

$no = [1, 2, 3, 4];

$result = array_map('show', $no, $names);
print_r($result);

echo PHP_EOL;
?>

<?php

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

  # 以下に回答を記載
  foreach($foods as $food) {
    if (preg_match("/うに/", $food)) {
        echo '好物です'.PHP_EOL;
    }else{
        echo 'まぁまぁ好きです'.PHP_EOL;
    }
}

?>

<?php
print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
  $sports2 = [];
foreach($sports as $key => $sport){
    if(is_array($sport)){
        $sports2 = array_merge($sports2, $sport);
    }else{
        array_push($sports2, $sport);
    }
}

$sports2 = array_unique($sports2);
$sports2 = array_values($sports2);
$sports3 = [];

foreach($sports2 as $key => $sport){
    $number = $key + 1;
    $sport3 = "No.".$number." ".$sport;
    array_push($sports3, $sport3);
}

print_r("ユーザの趣味一覧");
echo PHP_EOL;
foreach($sports3 as $sport){
   echo $sport;
   echo PHP_EOL;
}
echo PHP_EOL;

?>

<?php

print("#####q12#####".PHP_EOL);
$data = ["user" => ["name" => "satou", "age" => 33]];

  # 以下に回答を記載
  $data = ["user" => ["name" => "satou", "age" => 33]];
foreach($data as $a) {
    if(array_key_exists('name', $a)){
        echo $a['name'];
    }
}
echo PHP_EOL;

?>

<?php

print("#####q13#####".PHP_EOL);
$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

  # 以下に回答を記載
  $user_data = array_replace($user_data, $update_data);
print_r($user_data);
echo PHP_EOL;

?>

<?php

print("#####q14#####".PHP_EOL);
$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

  # 以下に回答を記載
print_r(array_values($data));

echo PHP_EOL;

?>

<?php

print("#####q15#####".PHP_EOL);
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

  # 以下に回答を記載



$search = 'age';

if (array_key_exists($search, $data1)) {
    echo 'OK'.PHP_EOL;
}else{
    echo 'NG'.PHP_EOL;
}

if (array_key_exists($search, $data2)) {
    echo 'OK'.PHP_EOL;
}else{
    echo 'NG'.PHP_EOL;
}
echo PHP_EOL;

?>

<?php

print("#####q16#####".PHP_EOL);
$users = [
  ["name" => "satou", "age" => 22],
  ["name" => "yamada", "age" => 12],
  ["name" => "takahashi", "age" => 32],
  ["name" => "nakamura", "age" => 41]
];

  # 以下に回答を記載

foreach ($users as $key => $value) {
  echo '私の名前は'.$value['name'].'です。年齢は'.$value['age'].'歳です。'.PHP_EOL;
}

echo PHP_EOL;

?>

<?php
print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

    public $name;
    public $age;
    public $sex;

    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }


    public function info() {
        echo '名前：'.$this->name.PHP_EOL;
        echo '年齢：'.$this->age.PHP_EOL;
        echo '性別：'.$this->sex.PHP_EOL;
    
    }
}

$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

?>

<?php

print("#####q18#####".PHP_EOL);

  # コードを追加
class Man
{

public $name;
public $age;

function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
}

function introduce() {
    //あじーさんの年齢以下なら、$man2を呼び出す
    if($this->age < 32){
        echo 'はいさいまいど〜，'.$this->name.'です！！！'.PHP_EOL;
    }else{
        echo 'こんにちは,'.$this->name.'と申します。宜しくお願いいたします。'.PHP_EOL;
    }
}

}

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;
  

?>

<?php

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  public $name;
  //Itemクラス外で使用するので、protected->publicに変更
  

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

?>

<?php
print("#####q20#####".PHP_EOL);
class Human
{
  # コードを追加
    // property
    public $name;
    public $age;
  
    //Humanクラスのインスタンス引数から名前と年齢の情報を受け取る
    function __construct($human_name, $human_age) {
        $this->name = $human_name;
        $this->age = $human_age;
    }
}

class Zoo
//Zooクラスのインスタンス引数から区分と入場料の情報を受け取る
//Humanクラスの$human_ageにアクセスする
//もし、$human_ageが０〜５歳ならzooクラスのインスタンス引数のinfantキーの値を返す
//もし、$human_ageが６〜１２歳ならzooクラスのインスタンス引数のchildrenキーの値を返す
//もし、$human_ageが13〜６４歳ならzooクラスのインスタンス引数のadultキーの値を返す
//もし、$human_ageが65〜120歳ならzooクラスのインスタンス引数のseniorキーの値を返す
{

  # コードを追加
  //property
    public $classification;
    public $entry_fee;
    
    function __construct($zoo_classification, $zoo_entry_fee) {
        $this->classification = $zoo_classification;
        $this->entry_fee = $zoo_entry_fee;
    }
        
    function info_entry_fee(Human $human) {
        if ($human->age <= 5) {
            echo $human->name.'さんの入場料金は '.$this->entry_fee['infant'].' 円です'.PHP_EOL;
        }elseif ($human->age <= 12) {
            echo $human->name.'さんの入場料金は '.$this->entry_fee['children'].' 円です'.PHP_EOL;
        }elseif ($human->age <= 64) {
            echo $human->name.'さんの入場料金は '.$this->entry_fee['adult'].' 円です'.PHP_EOL;
        }elseif ($human->age <= 120) {
            echo $human->name.'さんの入場料金は '.$this->entry_fee['senior'].' 円です'.PHP_EOL;
        }
    }
}
  # コードを追加
$zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;

?>

print("#####q21#####".PHP_EOL);

<?php

for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 ==0 && $i % 5 ==0 && $i % 7 ==0) {
        echo 'FizzBuzzHoge'.PHP_EOL;
    }elseif ($i % 5 ==0 && $i % 7 ==0) {
        echo 'BuzzHoge'.PHP_EOL;
    }elseif ($i % 3 ==0 && $i % 7 ==0) {
        echo 'FizzHoge'.PHP_EOL;
    }elseif ($i % 3 ==0 && $i % 5 ==0) {
        echo 'FizzBuzz'.PHP_EOL;
    }elseif ($i % 7 ==0) {
        echo 'Hoge'.PHP_EOL; 
    }elseif ($i % 5 ==0) {
        echo 'Buzz'.PHP_EOL;
    }elseif ($i % 3 == 0) {
        echo 'Fizz'.PHP_EOL; 
    }else{
        echo $i.PHP_EOL;
    }
}
    
?>
