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
    <form method="POST" action="http://localhost:80/QlBANHANG/Khachhangsua/sua">
    <h2 style="text-align:center ; color:blue; padding-top:20px;">SỬA THÔNG TIN KHÁCH HÀNG</h2>

     <?php
          if(isset($data['dulieu'])){
               while($row = mysqli_fetch_array($data['dulieu'])){

     ?>               


    <table>
        <tr class="dd2">
            <td class="col1">Mã khách hàng</td>
            <td class="col2">
                <input readonly class="dd1" type="text" name="txtMakh" value="<?php echo $row['Makh'] ?>" >
            </td>
            <td class="col1">Họ và tên</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtHoten" value="<?php  echo $row['Hoten'] ?>">
            </td>
        </tr>
        <tr class="dd2">
            <td class="col1">Ngày sinh</td>
            <td class="col2">
                <input class="dd1" type="date" name="txtNgaysinh" value="<?php  echo $row['Ngaysinh'] ?>">
            </td>
            <td class="col1">Điện thoại</td>
            <td class="col2">
                <input class="dd1" type="tel" name="txtDienthoai" value="<?php echo $row['Dienthoai'] ?>">
            </td>
        </tr>
        <tr class="dd2">
            <td class="col1">Email</td>
            <td class="col2" colspan="3">
                <input class="dd1" type="email" name="txtEmail" value="<?php  echo $row['Email'] ?>">
            </td>
            
        </tr>
        <tr class="dd2">
            <td class="col1">Địa chỉ</td>
            <td class="col2" colspan="3">
                <input class="dd1" type="text" name="txtDiachi" value="<?php  echo $row['Diachi'] ?>">
            </td>
            
        </tr>

        <?php

        }
          }
     ?>
        
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
