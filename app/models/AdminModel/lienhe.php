<?php
    // danh sách liên hệ
    function loadall_lienhe(){
        $sql = "SELECT * FROM lien_he";
        $listlienhe = pdo_query($sql);
        return $listlienhe;
    }

?>