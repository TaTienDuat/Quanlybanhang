<?php

     class DanhsachNCC_Model extends connectDB{
          public function Nhacungcap_Find($mancc,$tenncc){
               $sql = "SELECT * FROM nhacungcap WHERE Manhacungcap LIKE '%$mancc%' AND tenNhaCungCap LIKE '%$tenncc%'";
               return mysqli_query($this -> con,$sql);
          }
          function Nhacungcap_Del($mancc){
               $sql="DELETE FROM nhacungcap WHERE Manhacungcap='$mancc'";
               return mysqli_query($this->con,$sql);
           }

           function Nhacungcap_Upd($mancc, $tenncc,$dt,$dc){
               $sql = "UPDATE nhacungcap SET  tenNhaCungCap = '$tenncc', Sdt = '$dt', diaChi = '$dc' WHERE Manhacungcap='$mancc' ";
               return mysqli_query($this->con,$sql);
              
           }
     }
?>