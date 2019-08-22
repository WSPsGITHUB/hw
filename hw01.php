<?php 
 $result = $x =" ";

 if(isset($_GET['x'])){
    $x = $_GET['x'];   
    for($i=2; $i<$x; $i++){	
        if($x%$i == 0){ 
        $result="此數<b>'不是'</b>質數";    break;
        }else{
        $result="此數<b>'是'</b>質數";
        }  

    } 
 }  
?>


<style>
 input{
  margin:10px 0px;
 }
</style>


<form action="hw.php">
    <input id="x" name="x"  value="<?= $x ?>"><br>
    
    <input  type="submit" value="判斷(PHP版)-->">  
    <span> <?= $result ?> </span><br>


    <input  type="button" onclick="call()" value="判斷(JS版)-->"> 
    <span id='here'></span>     
</form>



<script>

 function call(){
    let x = document.getElementById('x').value; 
     for(var i=2; i<x; i++){	
       if(x%i == 0){ 
       result="此數<b>'不是'</b>質數";    break;
       }else{
       result="此數<b>'是'</b>質數";
       }  
     }
    document.getElementById('here').innerHTML = result;  
 }

</script>
