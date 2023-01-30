<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .col1{width: 15%;padding-left: 20px; color: blue;}
        .col2{width: 35%;}
        tr{ height: 40px;}
        .dd1{width: 100%; height: 25px;}
    </style>
</head>
<body>
    <form method="POST" action="http://localhost:80/qlbanhang/Danhsachkhachhang/Timkiem">
    <h2 style="text-align:center ; color:blue; padding-top:20px;">TÌM KIẾM KHÁCH HÀNG</h2>
    <table>
        <tr class="dd2">
            <td class="col1">Mã khách hàng</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtMakhachhang" value="<?php if(isset($data['Makhachhang'])) echo $data['Makhachhang'] ?>">
            </td>
            <td class="col1">Tên khách hàng</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtTenkhachhang" value="<?php if(isset($data['Hoten'])) echo $data['Hoten'] ?>">
            </td>
        </tr>
        <tr>
            <td class="col1"></td>
            <td colspan="3" class="col2">
                <input style="width: 70px; background: #cfe7e5; height:30px;" type="submit" name="btnTimkiem" value="Tìm kiếm">
            </td>
       
        </tr>
    </table>
    <table border="1" cellspaccing="0">
        <tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Ngày sinh</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th></th>
        </tr>
        <?php
            if(isset($data['dulieu'])){
                while ($row=mysqli_fetch_assoc($data['dulieu'])){
        ?>
            <tr>
                <td><?php echo $row['Makh'] ?></td>
                <td><?php echo $row['Hoten'] ?></td>
                <td><?php echo $row['Ngaysinh'] ?></td>
                <td><?php echo $row['Dienthoai'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['Diachi'] ?></td>
                <td>
                    <a style= "color:blue" href="http://localhost:80/qlbanhang/Danhsachkhachhang/Sua/<?php echo $row['Makh'] ?>">Sửa</a> &nbsp;&nbsp;&nbsp;
                    <a style= "color:blue" href="http://localhost:80/qlbanhang/Danhsachkhachhang/Xoa/<?php echo $row['Makh'] ?>"> Xóa</a>
                </td>
            </tr>
        <?php
                }
            }
        ?>
    </table>
    </form>
</body>
</html>
