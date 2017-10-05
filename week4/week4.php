<?php
$date =  date('Y-m-d', time());
echo "The value of $date: ".$date."<br>";
$tar= date('Y/m/d',time());
echo "The value of $tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of $year: ";
print_r($year);
$date=str_replace("-","/",$date);
echo "<br>";
echo "The  new value of date is: $date";
echo "<br>";
$cmp=strcmp($date,$tar);
echo "<br>";
echo "<br>";
class main
{
public function cmp($cmp) 
{
if($cmp>0)
{
echo 'The future';
echo "<br>";
}
elseif($cmp<0)
{
echo 'The Past';
echo "<br>";
}
elseif($cmp==0)
{
echo 'Output is Oops';
echo "<br>";
}
}
public function position($date)
{
$find='/';
$pos=strpos($date,$find);
$pos1=strpos($date,$find,5);
echo "The position of '/' is : $pos and $pos1";
echo "<br>";
}
public function nwords($date)
{
$words=explode('/',$date);
$nword=count($words);
echo " The number of words in date is : $nword";
echo "<br>";
}
public function length($date)
{
$length= strlen($date);
echo "The length of the string is '$length'";
echo "<br>";
}
public function ascii($date)
{
$ascii=ord($date);
echo " The ascii value of first letter is: $ascii";
echo "<br>";
}
public function charet($date)
{
$char=substr($date,8);
echo "The last two characters of the string is : $char";
echo "<br>";
}
public function brarray($date)
{
$brk=explode('/',$date);
echo "The array is :";
print_r($brk);
echo"<br>";
echo"<br>";
}
public function leapyear($year)
{
echo "Leapyear with Foreach Loop";
echo "<br>";
echo "<br>";
foreach($year as &$value)
{
while(($value%4)==0)
{
if(($value%400 == 0) || ($value%100)!= 0)
{
echo $value."-True<br>";
}					           
else
{
echo $value."-False<br>";
}
break;
}
}
echo "<br>";
echo "<br>";
echo "Leapyear with Switch Statement";
echo "<br>";
echo "<br>";
for($y=0;$y<sizeof($year);$y++)
{
switch((($year[$y]%4)==0)&&((($year[$y]%100)!=0)||(($year[$y]%400)==0)))
{
case True:
echo $year[$y]."-True";
break;
default:
echo $year[$y]."-False";
}
echo "<br>";
}
}
}
$obj= new main();
$obj->cmp($cmp);
$obj->position($date);
$obj->nwords($date);
$obj->length($date);
$obj->ascii($date);
$obj->charet($date);
$obj->brarray($date);
$obj->leapyear($year);
?>













