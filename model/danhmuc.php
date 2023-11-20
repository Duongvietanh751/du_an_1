<?php
    function ds_dm(){
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }
    

    
?>