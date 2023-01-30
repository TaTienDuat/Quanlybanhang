<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>loaisanpham</title>
     <style>
        tr{
            height: 35px;
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
            height: 20px;
            width: 98%;
        }
    </style>    
</head>

<body>
     <form method="post" action="http://localhost/QlBANHANG/Loaisanpham/ThemmoiLoaiSP">
          <table>
          <h2 style="text-align:center ; color:blue; padding-top:20px;">LOẠI SẢN PHẨM</h2>
               <tr class="dd2">
                    <td class="col1">Mã loại sản phẩm</td>
                    <td class="col2">
                         <input class="dd1" type="text" name="txtMaloai">
                    </td>
               </tr>
               <tr>
                    <td class="col1">Tên loại</td>
                    <td class="col2">
                         <input class="dd1" type="text" name="txtTenloai">
                    </td>
               </tr>
               <tr>
                    <td class="col1">Ghi chú</td>
                    <td class="col2">
                         <input class="dd1" type="text" name="txtGhichu">
                    </td>
               </tr>

               <tr>
                    <td></td>
                    <td colspan="3">
                         <input type="submit" name="btnLuu" value="Lưu">
                    </td>
               </tr>

          </table>
     </form>
</body>

</html>