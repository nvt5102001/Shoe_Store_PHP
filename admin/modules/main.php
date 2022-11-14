<?php

    if(isset($_GET['action']) && $_GET['query']){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam = '';
        $query = '';
    }
    // Main quản lý loại sản phẩm
    if($tam=='quanlyloaisp' && $query=='them')
    {
        include("modules/quanlyloaisp/them.php");
        include("modules/quanlyloaisp/lietke.php");
    }
    elseif ($tam =='quanlyloaisp' && $query=='sua') 
    {
        include("modules/quanlyloaisp/sua.php");
    }

    
    // Main quản lý sản phẩm
    elseif ($tam=='quanlysp' && $query=='them') 
    {
        include("modules/quanlysp/them.php");
    }
    elseif ($tam=='quanlysp' && $query=='lietke') 
    {
        include("modules/quanlysp/lietke.php");
    }
    elseif($tam=='quanlysp' && $query=='sua')
    {
        include("modules/quanlysp/sua.php");
    }
    elseif($tam=='quanlysp' && $query=='timkiemSP')
    {
        include("modules/quanlysp/timkiemSP.php");
    }

    // Main quản lý thương hiệu
    elseif ($tam=='quanlythuonghieu' && $query=='them') 
    {
        include("modules/quanlythuonghieu/them.php");
        include("modules/quanlythuonghieu/lietke.php");
    }
    elseif($tam=='quanlythuonghieu' && $query=='sua')
    {
        include("modules/quanlythuonghieu/sua.php");
    }
    // Main quản lý đơn bán
    elseif($tam=='quanlydonhang' && $query=='lietke')
    {
        include("modules/quanlydonhang/lietke.php");
    }
    elseif($tam=='quanlydonhang' && $query=='timkiemHD')
    {
        include("modules/quanlydonhang/timkiemHD.php");
    }
    elseif($tam=='donhang' && $query=='xemdonhang')
    {
        include("modules/quanlydonhang/xemdonhang.php");
    }

    // Main quản lý tài khoản
    elseif($tam=='quanlytaikhoan' && $query=='them')
    {
        include("modules/quanlytaikhoan/them.php");
        include("modules/quanlytaikhoan/lietke.php");
    }

    // Main quản lý tài khoản
    elseif($tam=='quanlynhapkho' && $query=='lietke')
    {
        include("modules/quanlynhapkho/lietke.php");
    }
    elseif($tam=='quanlynhapkho' && $query=='timkiemHD')
    {
        include("modules/quanlynhapkho/timkiemHD.php");
    }
    elseif($tam=='quanlynhapkho' && $query=='xemdonhang')
    {
        include("modules/quanlynhapkho/xemdonhang.php");
    }
   
    
    // Main quản lý dashboard
    else
    {
        include("modules/dashboard.php");
    }
	?> 