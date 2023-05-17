<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tmp = $_GET['action'];
            $query = $_GET['query'];
        } 
        else{
            $tmp = '';
            $query = '';
        }  
        if($tmp == 'quanLyDanhMucBaiViet' && $query == 'them'){
            include('quanlydanhmucbv/them.php');
            include('quanlydanhmucbv/lietke.php');
        }
        elseif($tmp == 'quanLyDanhMucBaiViet' && $query == 'sua'){
            include('quanlydanhmucbv/sua.php');
        }
        elseif($tmp == 'quanLyTaiKhoan' && $query == 'lietke'){
            include('quanLyTaiKhoan/lietke.php');
        }
        else{
            echo 'Dasboard';
        }
           
    ?>
</div>