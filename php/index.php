<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
			body{
				background-color: pink;
				color:blue;
			} 
		 	
			p{
				margin-bottom: 25px;
			}
			label.myclass{
				color:blue;
			}

			label#login{
				margin-right:40px;
			}
			label#password{
				margin-right:13px;
			}
			label#name{
				margin-right:35px; 
			}
			label#email{
				margin-right: 29px;
			}
			label#country{
				margin-right: 21px;
			}
			label#ciferka{
				margin-right: 85px;
			}
			a.bottom_link{
				color:green;
				font-family: Arial;
			}
			a.bottom_link:visited{
				color:black;
			}
			a.lipsum{
				color:aqua;
			}
			a.lipsum:visited{
				color:darkred;
			}
			form #a1,#a2{
				color:white;
			}
			#country{
				width: 173px;
				margin-left: 16px;
			}
			#country_label{
				padding-right: 3px;
			}
			form{
				background: lightpink;
				width: 35%;
				margin: 0 auto;
				size: 100%;
				padding-top: 10px;
				padding-bottom: 4%;
			}
			
		</style>
		<script>
		</script>
</head>
<body onload="disab()">
<?php
function bget()
{
	echo "Массив GET: ";
	print_r($_GET);
}
function bpost()
{
	echo "Массив POST: ";
	print_r($_POST);
}
function bfiles()
{
	echo "Массив FILES: ";
	print_r($_FILES);
}
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
echo "<br />";
$summ = 0;
for ($i = 1; $i<113; $i+=3)
{
	$summ += $i;
}
echo "<br /> Сумма (1+4+7+11+...+112) : ".$summ."<br /> ";
$arr2 = array();
for ($i = 0; $i<=10;$i++)
{
	$arr2[] = rand(1,50);
}
echo "<br />";
print_r($arr2);
$tt = 0;
for ($i = 0; $i<=9;$i++){
	for ($j = $i+1; $j<=10;$j++)
	{
		if ($arr2[$i]==$arr2[$j]) {echo "<br />Есть повторяющиеся элементы"; $tt++; break;}
	}
	if ($tt>0) break;
}
if ($tt==0) echo "<br /> Нет повторяющихся элементов";
echo "<br /><br />Массив с зануленными отрицательными элементами: <br />";
$arr3 = array();

for ($i = 0; $i<=10;$i++)
{
	$arr3[]=rand(0,50)-25;
	if ($arr3[$i]<0) $arr3[$i]=0;
}
print_r($arr3);
echo "<br /><br /><br /><br /><br />"; 
?>
<div id="main_text">
<form method="get" action="index.php" align="center">
		<p><label>Форма для отправки методом GET</label></p>
		<p><label class="myclass" id="login" for="login">login</label><input name="login" type="text"></p>
		<p><label class="myclass" id="password" for="password">password</label><input name="password" type="password"></p>
		<p><label class="myclass" id="name" for="name">Name</label><input name="name" type="text"></p>
		<p><label class="myclass" id="email" for="email">E-mail</label><input name="email" type="email"></p>
		<p><label id="country_label" for="country">Country</label><select id="country" name="country">
		<option value="Ukraine">Украина</option>
		<option value="Russia">Россия</option>
		<option value="Belorussia">Белоруссия</option>1
		</select></p>
		<p><label id="ciferka" for="country">Выберите циферку</label><select name="ciferka" multiple size="3">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		</select></p>
		<p><textarea rows=4 cols=25>О себе</textarea></p>
		<p><input name="Terms" type="checkbox">Принимаю условия соглашения</p>
		<p><label for="gender">Gender</label><input name="gender" type="radio" value="Male">Male
		<input name="gender" type="radio" value="Female">Female</p>
		<p><input type="submit" id="butt"></p>
		<a id="a1" class="bottom_link" href="http://google.ru">Гугл зачем-то</a>
		<a id="a2" class="bottom_link" href="http://ya.ru">Yandex зачем-то</a>
		<a id="a3" class="bottom_link" href="http://youtube.ru">Youtube зачем-то</a>
	</form>
	</div>
	<?php
	echo "<br /><br /><br />";
	bget();
	echo "<br /><br /><br />";
	 ?>
	 <form method="post" action="index.php" align="center" enctype="multipart/form-data">
	 <p><label>Форма для отправки методом POST и для загрузки файла</label></p>
	 <p><label class="myclass">login</label><input name="login" type="text"></p>
	 <p><label class="myclass">password</label><input name="password" type="password"></p>
	 <p><input type="file" name="uploadfile">
	 <p><input type="submit" id="butt"></p>
	 </form>
	 <?php
	echo "<br /><br /><br />";
	bpost();
	echo "<br /><br /><br />";
	bfiles();
	echo "<br /><br /><br />";
	$string = "<b><i> Hello World!! </i></b>";
	echo $string." - строка с тегами<br />";
	$string1 = strip_tags($string);
	echo $string1." - строка без тегов<br />";
	$string2 = strip_tags($string, '<b>');
	echo $string2." - строка только с тегом <\b>";
	 ?>
</body>
</html>