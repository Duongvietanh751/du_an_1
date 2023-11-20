<?php
    function ds_bl(){
        $sql = "select * from binhluan";
        $result = pdo_query($sql);
        return $result;
    }
   
    





?>