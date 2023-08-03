<?php
require 'connect.php';
$sql = "SELECT * FROM sinh_vien";
//
$result = $conn->query($sql)->fetchAll();
// chạy câu truy vấn và lấy ra tất cả dữ liệu
//echo "<pre>";
//var_dump($result); die;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Năm sinh</td>
            <td>Email</td>
            <td>Hình</td>
        </tr>
        <?php foreach ($result as $key => $value) { ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['ten']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['nam_sinh']; ?></td>
            <td><?php echo $value['image']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>