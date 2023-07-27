<?php
session_start();
// nếu tồn tại session user thì cho vào còn không thì cút
if (!isset($_SESSION['user'])) {
    echo "Bạn không có quyền truy cập trang này";
    die;
}
echo "ahihi đây là trang user .Xin chào ". $_SESSION['user'];
if (isset($_POST['dang_xuat'])) {
    // huy cai session nay di
    unset($_SESSION['user']);
    header("Location: login.php");
}
?>
<form action="" method="POST">
    <input type="submit" name="dang_xuat" value="Dang xuat">
</form>
