<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
echo "Вывод имени: <br />";
$name = "name";
$age = 17;
echo "Имя: $name, Возраст: $age <br />";
echo "Имя: ".$name.", Возраст: ".$age."<br/>";
echo "<br />Расчет значений: <br />";
$arr = array(3,7,4);
 echo "1 : ".($arr[0]+$arr[1]/$arr[2])."; 2 : ".($arr[0]+$arr[2]/$arr[1])."; 3 : ".($arr[1]+$arr[2]/$arr[0]).";<br />"; 
$per = rand(1,20);
$start = rand(0,7);
$end = rand (14,20);
echo "<br />Условия: <br />";
if ($per<=$start) echo "per lower then start;  result: ".($per*2);
if ($per>$start&&$per<=$end) echo "per between start and end; result: ".($per*2+1);
if ($per>$end) echo "per higher then end; result: ".$per;
$a = rand(1,4); $b = rand(1,4); $c = rand(1,4);
echo "<br /><br />Квадратное уравнение: ";
echo "<br />".$a."x^2+".$b."x+$c = 0";
$disc = $b*$b+4*$a*$c;
echo "<br />Первый корень: ".((-$b+sqrt($disc))/(2*$a))."; Второй корень: ".((-$b-sqrt($disc))/(2*$a)).";";
echo "<br /><br />Перестановка цифр в 3-хзначном числе:<br /> Есть вопросы";
for ($i=0;$i<rand(5,10);$i++)
{
	$arr1[]=rand(1,20);
}
echo "<br /><br />Массив до изменений:<br /> ";
print_r($arr1);
$maxi=0;$mini=0;$max=$arr1[0];$min=$arr1[0];
for ($i=1;$i<sizeof($arr1);$i++)
{
	if ($arr1[$i]>$max) {$max=$arr1[$i];$maxi=$i;}
	if ($arr1[$i]<$min) {$min=$arr1[$i];$mini=$i;}
}	
echo "<br />Максимальный элемент: ".$arr1[$maxi].", номер: ".$maxi."; Минимальный элемент: ".$arr1[$mini].", номер: ".$mini.";";
	$change = $arr1[$mini];
	$arr1[$mini]=$arr1[$maxi];
	$arr1[$maxi]=$change;
	echo "<br />Массив после изменений:<br /> ";
print_r($arr1);
?>
</body>
</html>