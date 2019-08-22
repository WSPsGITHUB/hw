
<style>
  b{
    color:red;
  } 
</style>



<?php

$poker =range(0,51);  
shuffle($poker);  //洗牌函數
//  foreach($poker as $k =>$v){
//      echo "{$k} : {$v}<br>";
//  }
echo"<hr>";



  $player = [[],[],[],[]];
  foreach($poker as $i => $card){
      $players[$i%4][(int)($i/4)] = $card;  
      
      $times=(int)($i/4)+1;
      $group=$i%4+1;
      
      if($i%4==0){
      echo "第<b>{$times}</b>回:&nbsp;&nbsp;&nbsp;&nbsp;";
      }
      if($group==4){
        echo "第<b>{$group}</b>組分到第<b>{$card}</b>張&nbsp;&nbsp;&nbsp;&nbsp;<br>";
        echo"<hr>";
      }else{
        echo "第<b>{$group}</b>組分到第<b>{$card}</b>張&nbsp;&nbsp;&nbsp;&nbsp;";  
      }             

    }

?>
 
