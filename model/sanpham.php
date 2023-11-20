<?php
   function ds_sp(){
      $sql = "select * from sanpham where 1 order by id desc limit 0,9";
      $result = pdo_query($sql);
      return $result;
   }

?>