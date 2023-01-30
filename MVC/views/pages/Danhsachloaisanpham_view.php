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
    <form method="post" action="http://localhost:80/QLBANHANG/Danhsachloaisanpham/TimkiemLoaiSP">
        <h2 style="text-align: center; color:blue;padding-top: 20px;">TÌM KIẾM LOẠI SẢN PHẨM</h2>
        <table>
            <tr>
                <td class="col1">Mã loại SP:</td>
                <td class="col2">
                    <input class="dd1" type="text" name="txtMaloai" value="<?php if(isset($data['maloai'])) echo $data['maloai'] ?>">
                </td>
                <td class="col1">Tên loại SP</td>
                <td class="col2">
                    <input class="dd1" type="text" name="txtTenloai" value="<?php if(isset($data['tenloai'])) echo $data['tenloai'] ?>">
                </td>
            </tr>
        
            <tr>
                <td></td>
                <td colspan="3">
                    <input type="submit" name="btnTimkiem" value="Tìm kiếm">
                </td>
            </tr>
        </table>
        <table border="1" cellspacing="0"> 
            <tr style="background: violet;">
                <th>STT</th>
                <th>Mã loại SP</th>
                <th>Tên loại SP</th>
                <th>Ghi chú</th>
                <th></th>
            </tr>
            <?php
               if(isset($data['dulieu'])){
                $i=0;
                while ($row=mysqli_fetch_assoc($data['dulieu'])){
                    $i+=1;
            ?>
                <tr>
                    <td><?php echo $i  ?></td>
                    <td><?php echo $row['Maloai']  ?></td>
                    <td><?php echo $row['Tenloai']  ?></td>
                    <td><?php echo $row['Ghichu']  ?></td>
                    <td>
                        <a  style="color: blue;" href="http://localhost:80/QLBANHANG/Danhsachloaisanpham/SualoaiSP/<?php echo $row['Maloai']?>">Sửa</a>
                        &nbsp;&nbsp;&nbsp;
                        <a style="color: blue;" href="http://localhost:80/QLBANHANG/Danhsachloaisanpham/XoaLoaiSP/<?php echo $row['Maloai']?>">Xóa</a>

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
