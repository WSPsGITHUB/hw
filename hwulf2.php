<?php
if (!isset($_FILES['upload']))  header('Location: hwulf1.php');  //若無資料返還

$upload =$_FILES['upload'];
foreach($upload as $k=>$v ){
    echo "{$k}之下 <br>";
    foreach($v as $kk=> $vv){
      echo "{$kk}==>{$vv}<br>";
    }
    echo "<hr>";
  }

foreach($upload['error'] as $k=>$v ){
    if ($v ==0){
        if (move_uploaded_file( $upload['tmp_name'][$k],
         "upload/{$upload['name'][$k]}")  ){
           echo "{$k} : 上傳成功<br>";
        }else{
           echo "{$k} : 上傳失敗<br>";
        }
    }else{  echo "{$k} : 請上傳資料<br>";     }
}

?>

<hr>
<a href="hwulf1.php">上一頁(回上傳區)</a>
<hr>
<a href="hwulf3.php">下一頁(至長輩圖區)</a>
<!-- from lab46.php -->
