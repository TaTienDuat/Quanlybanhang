<?php
class Loaisanpham_model extends ConnectDB
{
     function LoaiSP_ins($Maloai, $Tenloai, $Ghichu)
     {
          $sql = "INSERT INTO loaisanpham VALUE ('$Maloai','$Tenloai', '$Ghichu')";
          return mysqli_query($this->con, $sql);
     }
     // function LoaiSP_trungma($Maloai){
     //      $sql 
     // }
     function LoaiSP_find($maloai, $tenloai)
     {
          $sql = "SELECT * FROM loaisanpham WHERE Maloai LIKE '%$maloai%' AND Tenloai LIKE '%$tenloai%'";
          return mysqli_query($this->con, $sql);
     }

     function LoaiSP_del($maloai)
     {
          $sql = "DELETE FROM loaisanpham WHERE Maloai='$maloai'";
          return mysqli_query($this->con, $sql);
     }
     function LoaiSP_upd($maloai,$tenloai,$ghichu){
            $sql="UPDATE loaisanpham SET Tenloai='$tenloai', Ghichu='$ghichu' 
            WHERE Maloai='$maloai'";
            return mysqli_query($this->con,$sql);
        }
}
