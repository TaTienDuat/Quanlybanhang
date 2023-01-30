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
    <form method="POST" action="http://localhost:80/QLBANHANG/NhacungcapSua/SuaNCC">
    <h2 style="text-align:center ; color:blue; padding-top:20px;">Cập nhật nhà cung cấp</h2>
    <table>
        <?php
          if(isset($data['dulieu'])){
            while ($row=mysqli_fetch_array($data['dulieu'])){
        ?>
        
        <tr class="dd2">
            <td class="col1">Mã nhà cung cấp</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtManhacungcap" value="<?php echo $row['Manhacungcap'] ?>" readonly>
            </td>
            <td class="col1">Tên nhà cung cấp</td>
            <td class="col2">
                <input class="dd1" type="text" name="txtTennhacungcap" value="<?php echo $row['Tennhancungcap'] ?>">
            </td>
        </tr>
        <tr>
            <td class="col1">Điện thoại</td>
            <td class="col2">
                <input class="dd1" type="tel" name="txtDienthoai" value="<?php echo $row['Dienthoai'] ?>">
            </td>
            <td class="col1"></td>
            <td class="col2">
                
            </td>
        </tr>
        <tr>
            <td class="col1">Địa chỉ</td>
            <td colspan="3" class="col2">
                <input class="dd1" type="text" name="txtDiachi" value="<?php echo $row['Diachi'] ?>">
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
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input style="width: 70px; background: #cfe7e5; height:30px;" type="submit" name="btnBack" value="Quay lại">
            </td>
       
        </tr>
    </table>
    </form>
</body>
</html>