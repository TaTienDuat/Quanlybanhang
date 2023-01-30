<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr{
            height: 35px;
            padding-right: 20px;
        }
        .col1{
            width: 15%;
            color: blue;
            padding-left: 10px;
        }
        .col2{
            width: 35%;
        }
        .dd1{
            height: 24px;
            width: 99%;
        }
    </style>    
</head>
<body>
    <form method="post" action="http://localhost:80/QLBANHANG/LoaisanphamSua/LoaiSP_Sua">
        <h2 style="text-align: center; color:blue;padding-top: 20px;">SỬA THÔNG TIN LOẠI SẢN PHẨM</h2>
        <table>
            <tr>
                <?php
                    if(isset($data['dulieu'])){
                        while($row=mysqli_fetch_array($data['dulieu'])){
                ?>
                
                
                <td class="col1">Mã loại SP:</td>
                <td class="col2">
                    <input class="dd1" type="text" name="txtMaloai" value="<?php echo $row['Maloai'] ?>" readonly>
                </td>
                <td class="col1">Tên loại SP</td>
                <td class="col2">
                    <input class="dd1" type="text" name="txtTenloai" value="<?php echo $row['Tenloai'] ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Ghi chú</td>
                <td colspan="3">
                    <input class="dd1" type="text" name="txtGhichu" value="<?php echo $row['Ghichu'] ?>">
                </td>
            </tr>
            <?php
                        }
                    }
                ?>                
            <tr>
                <td></td>
                <td colspan="3">
                    <input type="submit" name="btnLuu" value="Lưu">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="btnQuaylai" value="Quay lại">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>