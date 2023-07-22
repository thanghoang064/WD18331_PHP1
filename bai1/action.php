<?php
// nhận được dữ liệu ở file này
if (isset($_GET['nut'])) {
    $so1 = $_GET['so_thu_nhat'];
    $so2 = $_GET['so_thu_hai'];
    echo " Tổng là ".($so1+ $so2);
}