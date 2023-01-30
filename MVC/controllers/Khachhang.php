<?php
class Khachhang extends controller{
    protected $kh;
    function __construct()
    {
        $this->kh=$this->model("Khachhang_Model");
    }
    function Get_data(){
        $this->view("Masterlayout",[
            'page'=>"Khachhang_View"
        ]);
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $makh=$_POST['txtMakh'];
            $ht=$_POST['txtHoten'];
            $ngs=$_POST['txtNgaysinh'];
            $dt=$_POST['txtDienthoai'];
            $email=$_POST['txtEmail'];
            $dc=$_POST['txtDiachi'];
            $kq=$this->kh->khachhang_ins($makh,$ht,$ngs,$dt,$email,$dc);
            if($kq){
                echo '<script type="text/javascript">alert("Thêm mới thành công!")</script>';
         
            }
            else{
                echo '<script type="text/javascript">alert("Thêm mới thất bại!")</script>';
            }
            $this->view("Masterlayout",[
                'page'=>"Khachhang_View",
                'Makh'=>$makh,
                'Hoten'=>$ht,
                'Ngaysinh'=>$ngs,
                'Dienthoai'=>$dt,
                'Email'=>$email,
                'Diachi'=>$dc
            ]);
        }
    }
}
?>