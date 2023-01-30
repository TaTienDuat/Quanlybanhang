<?php
class Khachhang_Model extends connectDB{
    function khachhang_ins( $makh, $ht, $ngs, $dt, $email, $dc){
        $sql="INSERT INTO khachhang VALUES('$makh',N'$ht','$ngs','$dt','$email',N'$dc')";
        return mysqli_query($this->con,$sql);
    }
    function Khachhang_find($makh, $hoten){
        $sql = "SELECT * FROM khachhang WHERE Makh LIKE '%$makh%' AND Hoten LIKE '%$hoten%'";
        return mysqli_query($this -> con, $sql);
    }

    function Khachhang_update($makh, $hoten,$ngs, $dt, $email, $dc) {
        $sql = "UPDATE khachhang SET Hoten = N'$hoten',
         Ngaysinh = '$ngs' , Dienthoai = '$dt' , Email = '$email', Diachi = N'$dc' WHERE Makh = '$makh'";
         return mysqli_query($this -> con,$sql);
    }

    function Khachhang_delete($makh) {
        $sql = "DELETE FROM khachhang WHERE Makh = '$makh'";
         return mysqli_query($this -> con,$sql);
    }

}
?>