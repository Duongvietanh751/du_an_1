<?php
    session_start();
    ob_start();
    include"view/header.php";
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'shop':
                # code...
                include"view/shop.php";
                break;
            case 'contact':
                    # code...
                    include"view/contact.php";
                    break;
            case 'blog':
                # code...
                include"view/blog.php";
                break;
            case 'cart':
                # code...
                include"view/cart.php";
                break;
            case 'wishlist':
                # code...
            include"view/wishlist.php";
                break;
            case 'checkout':
                # code...
                include"view/checkout.php";
                break;
            case 'login':
                # code...
                include"view/login.php";
                break;
            case 'account':
                # code...
                include"view/account.php";
                break;
            case 'register':
                # code...
                include"view/register.php";
                break;
            case 'product':
                # code...
                include"view/product.php";
                break;
            default:
            include"view/home.php";
            break;
        }
    }else{
        include"view/home.php";
    }
    include"view/footer.php";
?>