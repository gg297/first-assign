<?php
$array= array(1,2,3,4,5,6,7);
class main
{
  public function arrayprint($array)
  {
  echo '<h1>demo for printing array</h1>';
  print_r($array);
  echo '<hr>';
 }
 
 public function capitalletter()
  {
   echo '<h1>demo for uppercase letter </h1>';
   $array1=array("great"=>"5","day"=>"3");
   print_r(array_change_key_case($array1,CASE_UPPER));
    echo '<hr>';
  }
  
public function chunkarray()
    {
   echo '<h1> demo for breaking array</h1>';
   $array2=array(a,b,c,d,e,f);
    print_r(array_chunk($array2,2));
     echo '<hr>';
    }
    
public function combinearr()
    {
     echo '<h1>demo for combining array</h1>';
     $array3=array(A,B,C);
     $array4=array(Avocado,Banana,Chickoo);
     $array5=array_combine($array3,$array4);
     print_r($array5);
     echo '<hr>';
   }
   
 public function arrcount()
     {
    echo '<h1>array count demo</h1>';
    $array6=array(donkey,puma,donkey,puma,monkey);
    print_r(array_count_values($array6));
    echo '<hr>';
     }
     
 public function mergearr()
         {
	 echo '<h1>demo for merging array</h1>';
	 $array7=array("i","love");
	 $array8=array("web","systems development");
	 $result=array_merge($array7,$array8);
	 print_r($result);
	 echo '<hr>';
	 }
   
 public function sortarr()
	  {
	  echo '<h1>demo for sorting array</h1>';
   $array9=array(10,50,70,1000);
	  $array10=array(7,3,5,9);
	   array_multisort($array9,$array10);
	   var_dump($array9);
	   var_dump($array10);
	    echo '<hr>';
	   }
       
public function productarr()
	   {
	   echo '<h1>demo for multiplying array</h1>';
	   $array11=array(2,3,4,5);
	   echo array_product($array11);
	   echo '<hr>';
	   }
       
public function reversearr()
	   {
	   echo '<h1>demo for reversing array</h1>';
           $input=array(1,2,3,4,5);
	   $reverse=array_reverse($input);
	     print_r($input);
	     print_r($reverse);
	    echo '<hr>';
            }
            
public function searcharr()
	    {
            echo '<h1>demo for searching array</h1>';
	    $array12=array(0=>'red',1=>'blue',2=>'yellow');
	    $search=array_search('blue',$array12);
            print_r($array12);
	    echo"<br/>";
	    echo "$search";
	    echo '<hr>';
	    }
       	}
	$obj=new main();
	$obj->arrayprint($array);
	$obj->capitalletter();
	$obj->chunkarray();
	$obj->combinearr();
	$obj->arrcount();
	$obj->mergearr();
	$obj->sortarr();
	$obj->productarr();
	$obj->reversearr();
	$obj->searcharr();
	?>