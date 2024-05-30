<?php
  function insert_user($ten_dang_nhap,$pass,$hoten,$email,$sdt,$diachi){
    $sql = " INSERT INTO user(ten_dang_nhap,pass,hoten,email,sdt,diachi,id_vaitro) VALUES ('$ten_dang_nhap','$pass','$hoten','$email','$sdt','$diachi','2')";
    pdo_execute($sql);
  }
  function delete_user($id_user){
    $sql = "DELETE FROM user WHERE id_user=".$id_user;
    pdo_execute($sql);
  }
  function update_user($id_user,$ten_dang_nhap,$pass,$hoten,$email,$sdt,$diachi){
    $sql = "update user set ten_dang_nhap='".$ten_dang_nhap."',pass='".$pass."',hoten='".$hoten."',email='".$email."',sdt='".$sdt."',diachi='".$diachi."' where id_user=".$id_user;
    pdo_execute($sql);
}
// hiển thị danh sách khach hang
function loadAll_user(){
  $sql = " SELECT * FROM user as a INNER JOIN vai_tro as b ON a.id_vaitro=b.id_vaitro ";
  $listuser = pdo_query($sql);
  return $listuser;
} 
// phân quyền khách hàng
function update_phanquyen($id_user,$id_vaitro){
  $sql = "update user set id_vaitro='".$id_vaitro."' where id_user=".$id_user;
  pdo_execute($sql);
}
function loadOne_user($id_user){
$sql = "select * from user where id_user=".$id_user;
$user = pdo_query_one($sql);
return $user;
}
?>