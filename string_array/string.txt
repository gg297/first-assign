                                                                                                                                           
                                                                                                                                                                                                                                                
<?php
$text="my text";
class main
{
  public function printthis($text)
      {
  echo '<h1>print function demo</h1>';
  echo 'hii</br>';
  print($text);
  echo'<hr>';
     }		
  public function cslash($text)
    {
    echo '<h1>cslash function demo</h1>';
    echo addcslashes($text,'a..z');
    echo'<hr>';
    }
  public function trimthis($text)
      {
     echo '<h1>trim function demo</h1>';
     echo chop($text,'text');
     echo '<hr>';
      }
   public function character()
     {
   echo '<h1>character function demo </h1>';
   $str=chr(046);
   echo "$str";
   echo '<hr>';
     }
  public function splitthis()
      {
    echo '<h1>explode function demo</h1>';
    $str= 'one,two,three,four';
     print_r(explode (',',$str,2));
     echo '<hr>';
     }
  public function joinstring()
  {
  echo '<h1> implode function demo </h1>';
  $str=array('my','text','example');
  echo implode (" ",$str);
  echo '<hr>';
  }
  public function lowercase()
      {
   echo '<h1> lowercase function demo</h1>';
   $str= 'HELLO WORLD';
   $str= lcfirst($str);
   echo "$str";
   echo '<hr>';
     }
  public function splitstring($text)
     {
   echo '<h1> splitstring function demo</h1>';
   $spt=str_split($text);
   print_r($spt);
   echo '<hr>';
     } 
   public function stringcmp()
      {
      echo '<h1> string comparision demo</h1>';
      $var1= "hello";
      $var2= "world";
      if (strcmp($var1,$var2)!==0)
      {
      echo "$var1 and $var2 are not equal";
       }
       echo '<hr>';
       }
  public function stringlen($text)
      {
       echo '<h1>string length demo</h1>';
       echo strlen($text);
       echo '<hr>';
       }
       }
 $obj = new main();
 $obj->printthis($text);
 $obj->cslash($text);
 $obj->trimthis($text);
 $obj->character();
 $obj->splitthis();
 $obj->joinstring();
 $obj->lowercase();
 $obj->splitstring($text);
 $obj->stringcmp();
 ?>