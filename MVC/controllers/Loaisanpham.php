<?php
class Loaisanpham extends controller{
    public $lsp;
    function __construct()
    {
     $this->lsp = $this->model('Loaisanpham_model');
    }
    
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'Loaisanpham_View'
        ]);
    }

    function ThemmoiLoaiSP(){
     if(isset($_POST['btnLuu'])){
          $Maloai=$_POST['txtMaloai'];
          $Tenloai=$_POST['txtTenloai'];
          $Ghichu=$_POST['txtGhichu'];
          $kq=$this->lsp->LoaiSP_ins($Maloai,$Tenloai,$Ghichu);
          if($kq){
              echo '<script type="text/javascript">alert("Thêm mới thành công!")</script>';
          }
          else{
              echo '<script type="text/javascript">alert("Thêm mới thất bại!")</script>';
          }
          $this->view('Masterlayout',[
              'page'=>'Loaisanpham_view',
              'maloai'=>$Maloai,
              'tenloai'=>$Tenloai,
              'ghichu'=>$Ghichu
          ]);
      }
    }
}
