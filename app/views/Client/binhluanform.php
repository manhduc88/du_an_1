<?php
  include "../../models/binhluan.php";
  include "../../models/pdo.php";

  session_start();
  ob_start();
  $id_sanpham=$_REQUEST['id_sanpham'];
  $dsbl=loadAll_binhluan($id_sanpham);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .searbox form{
            width: 80%;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            margin: 0 auto;
            padding-top: 20px;
            
        }
        .searbox > form >input{
            padding: 8px;

        }
        .searbox > form .binhluan{
            padding: 8px;

        }
        .searbox > form .gui{
            width: 300px;
            color: white;
            background-color: #0B846B;
           
            border: none;
        }

    </style>
</head>
<body>
    <div class="product-reviews">
        

        <div class="reviews-list" style="">
            <?php
            foreach ($dsbl as $bl ){
                extract($bl);
                echo '
                <div class="single-review">

                    <div class="reviewer">
                        <div class="reviewer-wrap">
                            <i class="user-icon flaticon-user" style="font-size:30px; margin-right: 10px;"></i>
                            <h4 class="reviewer-name">'.$ten_dang_nhap.'</h4>
                        </div>
                    </div>
                    <div class="review-middle">
                    <ul class="review-list">
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item"><i class="flaticon-star"></i></li>
                    </ul>
                    <span class="remiew-time"></span>
                    </div>
                    <h3 class="review-title">'.$noi_dung.'</h3>
                    <h4 class="review-meta"><span class="time">'.$ngay_binhluan.'</span></h4>
                </div>
                ';
            }
            ?>
           
        </div>
        <div class="searbox">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="hidden" name="id_sanpham" id="" value="<?=$id_sanpham?>">
            <textarea  id="" cols="120" rows="4" name="noidung" class="binhluan" placeholder="Nhập nội dung vào đây..."></textarea>
            <input type="submit" name="guibinhluan" id="" value="Gửi bình luận" class="gui">
            </form>
        </div>
    </div>

    
   
    <?php
    if(isset($_SESSION['user'])){
    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $id_sanpham=$_POST['id_sanpham'];
        $ngay_binhluan=date('h:i:sa d/m/Y');
        $id_user=$_SESSION['user']['id_user'];
        $noi_dung=$_POST['noidung'];
        insert_binhluan($id_user,$id_sanpham,$noi_dung,$ngay_binhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
        exit();
    }}else {
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            header("location: ../../../index.php?act=dangnhap");
            exit();
        }
    }


    ?>
</body>
</html>
<?php ob_end_flush(); ?>