<?php
     function ds_kh(){
        $sql = "select * from taikhoan";
        $result = pdo_query($sql);
        return $result;
     }




?>