<?php
 //given array function finds the duplicate number without using any built-on function
 $arr = array(3,5,2,5,3,9,4,6,4);
  $temp_array = array();

  foreach($arr as $val)
  {
     if(isset($temp_array[$val]))
     {
       $temp_array[$val] = $val;
    }else{
     $temp_array[$val] = 0;
   }
 }

 foreach($temp_array as $val2)
 {
    if($val2 > 0)
    {
      echo $val2 . ', ';
    }
 }
 ?>
