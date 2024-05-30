<?php
   //tổng cố đơn hàng
   function load_tongdh(){
        $sql ="SELECT COUNT(*) as total FROM don_hang ";
        $tongdh = pdo_query_one($sql);
        return $tongdh;
    }
    function load_tonglx(){
        $sql ="SELECT SUM(luotxem) as tonglx FROM san_pham ";
        $tonglx = pdo_query($sql);
        return $tonglx;
    }
    function load_tongsp(){
        $sql ="SELECT COUNT(*) as total FROM san_pham ";
        $tongsp = pdo_query_one($sql);
        return $tongsp;
    }
    function load_tongnd(){
        $sql ="SELECT COUNT(*) as total FROM user ";
        $tongnd = pdo_query_one($sql);
        return $tongnd;
    }
?>