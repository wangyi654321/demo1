<?php
/*$x=5;
$y=6;
$z=$x+$y;
echo $z;*/

// php中三元运算符的使用;  PHP_EOL; 是一个换行符,兼容更大的平台.
$username =$test ? $test : 'nobody';
echo $username PHP_EOL;

$username =$test ?: 'nobody';
echo $username PHP_EOL; 

// php  中连接用.   而javascript中使用+;

//运算符的优先级口诀：括（号）、单（操作数）、算（术）、移（位）、关（系）；位（运算符）、逻（辑）、条（件）、赋（值）、逗（号）。
//组合比较运算符又名太空船运算符，组合比较运算符可以轻松实现两个变量的比较，当然不仅限于数值类数据的比较。
$c = $a <=> $b;
$a和$b进行比较 : $a>$b  $c=1;
$a和$b进行比较 : $a=$b  $c=0;
$a和$b进行比较 : $a<$b  $c=-1;

1\数值数组;
2\关联数组的遍历:
$age=array("peter"=>"34","ben"=>"45","Jon"=>"12");
foreach ($age as $key => $value) {
	echo "key=" . $key . ",age=" . $value;
}
3\多维数组;


  ?>