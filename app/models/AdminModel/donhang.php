<?php
// hiển thị tất cả dũ liệu bảng đơn hàng
function loadAll_donhang(){
    $sql ="SELECT * FROM don_hang order by id_donhang desc";
    $donhang = pdo_query($sql);
    return $donhang;
}
function loadAll_giohang_count($id_donhang){
    $sql = "select * from chitiet_donhang where id_donhang=".$id_donhang;
    $giohang = pdo_query($sql);
    return sizeof($giohang);
}

// trạng thái đơn hàng
function get_ttdh($n){
    switch ($n){
      case '1':
        $tt="Chờ xác nhận";
        break;
      case '2':
        $tt="Đã xác nhận";
        break;
      case '3':
        $tt="Đang giao hàng";
        break;      
      case '4':
        $tt="Hoàn tất";
        break;
      case '5':
        $tt="Đã hủy đơn";
        break;
      default:
        $tt="Chờ xác nhận";
        break;
    }
    return $tt;
  }
  function get_pttt($n){
    switch ($n){
      case '1':
        $pt="Thanh toán bằng VNPAY";
        break;
      case '2':
        $pt="Thanh toán khi nhận hàng";
        break;      

    }
    return $pt;
  }
  function delete_donhang($id_donhang){
    $sql = "DELETE FROM don_hang WHERE id_donhang=".$id_donhang;
    pdo_execute($sql);
  }
  function delete_giohang($id_donhang){
    $sql = "DELETE FROM chitiet_donhang WHERE id_donhang=".$id_donhang;
    pdo_execute($sql);
  }
  function loadAll_chitietdh($id_donhang){
    $sql ="SELECT * FROM chitiet_donhang where id_donhang=".$id_donhang;
    $listdhct = pdo_query($sql);
    return $listdhct;
}
function loadOne_donhang($id_donhang){
  $sql = "select * from don_hang where id_donhang=".$id_donhang;
  $donhang = pdo_query_one($sql);
  return $donhang;
}

// cập nhật trạng thái đơn hàng
function update_ttdh($id_donhang,$trang_thai){
  $sql = "update don_hang set trang_thai='".$trang_thai."' where id_donhang=".$id_donhang;
  pdo_execute($sql);
}
?>