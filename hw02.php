<style>
  h3,b{
    color:red;
  } 
</style>


<h3 align="center">以下為舊版</h3><hr>
<div align="center">
<?php
$poker =range(0,51);  
shuffle($poker);  //洗牌函數

  $player = [[],[],[],[]];
  foreach($poker as $i => $card){  //$poker分成 KEY(序列) VALUE(亂數值)
      $players[$i%4][(int)($i/4)] = $card;   //控制「幾組」 控制「幾張牌」
      
      $times=(int)($i/4)+1;
      $group=$i%4+1;
      
      if($i%4==0){
      echo "第<b>{$times}</b>回:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      }
      if($group==4){
        echo "第<b>{$group}</b>組=>第<b>{$card}</b>張&nbsp;&nbsp;&nbsp;&nbsp;<br>";
        echo"<hr>";
      }else{
        echo "第<b>{$group}</b>組=>第<b>{$card}</b>張&nbsp;&nbsp;&nbsp;&nbsp;";  
      }             
    }
?>
</div>

<h3 align="center">以下為新版</h3><hr>
<table border="1" width="100%" >  
    <?php
      $suits =[   
        "&spades;",  //0~12 花色一
        "<font color='red'>&hearts;</font>",  //13~25 花色二
        "&clubs;",   //26~38  花色三
        "<font color='red'>&diams;</font>",  //39~51  花色四
      ];

      $values=['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];

      foreach($players as $player){  //分4組(行)
        sort($player);
        echo '<tr>';
           foreach($player as $card){
             echo '<td>';
             echo $suits[(int)($card/13)];
             echo $values[$card%13];
             echo '</td>';
        }
        echo '</tr>';
      }
    ?>    
</table>
 
