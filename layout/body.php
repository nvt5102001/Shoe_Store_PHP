<div>
<?php 
    if(isset($_GET['page']))
    {
        $temp = $_GET['page'];
    }
    else
    {
        $temp = '';
    }

    // Trang chủ
    if($temp == 'home')
    {
        include("main/home.php");
    }

    // Cửa hàng
    else if($temp == 'shop')
    {
        include("main/shop.php");
    }

    // Lọc sản phẩm theo loại sản phẩm
    else if($temp == 'loaisp')
    {
        include("main/shopByType.php");
    }

    // Lọc sản phẩm theo thương hiệu
    else if($temp == 'thuonghieu')
    {
        include("main/shopByTH.php");
    }

    elseif($temp=='timkiem'){
        include("main/shopByKey.php");
    }

    // Chi tiết sản phẩm
    else if($temp == 'sanpham')
    {
        include("main/singleProduct.php");
    }

    // Giỏ hàng
    elseif($temp=='giohang'){	
        include("main/cart.php");
    }

    // Giỏ hàng
    elseif($temp=='pay'){	
        include("main/pay.php");
    }
    // Giỏ hàng
    elseif($temp=='camon'){	
        include("main/camon.php");
    }

    // Đăng nhập
    elseif($temp=='login'){	
        include("main/login.php");
    }

    //Đăng ký
    elseif($temp=='signup'){	
        include("main/signup.php");
    }

    // Xem lịch sử đơn hàng
    elseif($temp=='orderHistory'){	
        include("main/orderHistory.php");
    }

    //Xem chi tiết đơn hàng
    elseif($temp=='xemctdh'){	
        include("main/xemctdh.php");
    }

    // Tìm kiếm lịch sử mua hàng
    elseif($temp=='searchOrderHistory'){	
        include("main/searchOrderHistory.php");
    }

    // Check out
    elseif($temp=='checkout'){	
        include("main/checkout.php");
    }

    elseif($temp == 'about')
    {
        include("main/about.php");
    }
    elseif($temp == 'contact')
    {
        include("main/contact.php");
    }
    else
    {
        include("main/home.php");
    }

?>
</div>