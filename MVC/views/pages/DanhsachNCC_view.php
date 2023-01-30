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
    <form method="POST" action="http://localhost:80/qlbanhang/DanhsachNCC/TimkiemNCC">
    <h2 style="text-align:center ; color:blue; padding-top:20px;">TÌM KIẾM NHÀ CUNG CẤP</h2>
    <table>
        <tr class="dd2">
            <td class="col1">Mã nhà cung cấp</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtManhacungcap" value="<?php if(isset($data['mncc'])) echo $data['mncc'] ?>">
            </td>
            <td class="col1">Tên nhà cung cấp</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtTennhacungcap" value="<?php if(isset($data['tenncc'])) echo $data['tenncc'] ?>">
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
            <th>Mã nhà cung cấp</th>
            <th>Tên nhà cung cấp</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
            <th></th>
        </tr>
        <?php
            if(isset($data['dulieu'])){
                while ($row=mysqli_fetch_assoc($data['dulieu'])){
        ?>
            <tr>
                <td><?php echo $row['Manhacungcap'] ?></td>
                <td><?php echo $row['tenNhaCungCap'] ?></td>
                <td><?php echo $row['Sdt'] ?></td>
                <td><?php echo $row['diaChi'] ?></td>
                <td>
                    <a style= "color:blue" href="http://localhost:80/qlbanhang/DanhsachNCC/NCC_/">Sửa</a> &nbsp;&nbsp;&nbsp;
                    <a style= "color:blue" href="http://localhost:80/qlbanhang/DanhsachNCC/XoaNCC/<?php echo $row['Manhacungcap'] ?>"> Xóa</a>
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
