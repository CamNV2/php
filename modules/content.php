
    <div class="container">
        <?php
        if (isset($_GET['xem'])) {
            $tam = $_GET['xem'];
        } else {
            $tam = '';
        }
        if ($tam == 'chitiet') {
            include('modules/Detail_Product.php');
        } else if ($tam == 'login') {
            include('modules/Login.php');
        } elseif ($tam == 'thanhtoan') {
            include('modules/thanhtoan.php');
        } elseif ($tam == 'contact') {
            include('modules/contact.php');
        } elseif ($tam == 'dangky') {
            include('modules/SignUp.php');
        } elseif ($tam == 'cart') {
            include('modules/Your_cart.php');

        } else
            include('modules/Book_Products.php');
        ?>
    </div>
</div>
