<?php

session_start();
$products = array(
   'SP01'=> array('SP01','Điều hòa',10000,10),
    'SP02'=> array('SP02','Máy giặt',9000,120),
    'SP03'=> array('SP03','Quạt',7000,56),
    'SP04'=> array('SP04','Tivi',8000,80),
  );

   if (isset($_GET['msp'])) {
     $msp =$_GET['msp'];

    
     if (isset($_SESSION['products'][$msp])) {
       $_SESSION['products'][$msp][3]++;
     }else{
         $products[$msp][3]=1; 
          $_SESSION['products'][$msp]=$products[$msp];
          $_SESSION['products'][$msp]['time']=date('d/m/y h:s:i');
     }
      echo "<pre>";
        print_r($_SESSION);
     echo "</pre>";


   }
   header('Location: detail.php')
?>