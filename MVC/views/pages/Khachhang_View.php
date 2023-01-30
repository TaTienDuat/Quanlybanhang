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
    <form method="POST" action="http://localhost:80/QlBANHANG/Khachhang/Themmoi">
    <h2 style="text-align:center ; color:blue; padding-top:20px;">CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h2>
    <table>
        <tr class="dd2">
            <td class="col1">Mã khách hàng</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtMakh" value="<?php if(isset($data['Makh'])) echo $data['Makh'] ?>" >
            </td>
            <td class="col1">Họ và tên</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtHoten" value="<?php if(isset($data['Hoten'])) echo $data['Hoten'] ?>">
            </td>
        </tr>
        <tr class="dd2">
            <td class="col1">Ngày sinh</td>
            <td class="col2">
                <input class="dd1" type="date" name="txtNgaysinh" value="<?php if(isset($data['Ngaysinh'])) echo $data['Ngaysinh'] ?>">
            </td>
            <td class="col1">Điện thoại</td>
            <td class="col2">
                <input class="dd1" type="tel" name="txtDienthoai" value="<?php if(isset($data['Dienthoai'])) echo $data['Dienthoai'] ?>">
            </td>
        </tr>
        <tr class="dd2">
            <td class="col1">Email</td>
            <td class="col2" colspan="3">
                <input class="dd1" type="email" name="txtEmail" value="<?php if(isset($data['Email'])) echo $data['Email'] ?>">
            </td>
            
        </tr>
        <tr class="dd2">
            <td class="col1">Địa chỉ</td>
            <td class="col2" colspan="3">
                <input class="dd1" type="text" name="txtDiachi" value="<?php if(isset($data['Diachi'])) echo $data['Diachi'] ?>">
            </td>
            
        </tr>
        <tr>
            <td class="col1"></td>
            <td colspan="3" class="col2">
                <input style="width: 70px; background: #cfe7e5; height:30px;" type="submit" name="btnLuu" value="Lưu">
            </td>
       
        </tr>
    </table>
        
    </form>
</body>
</html>