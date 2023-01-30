<?php
class Danhsachloaisanpham extends controller{
    public $dslsp;
    function __construct()
    {
        $this->dslsp=$this->model('Loaisanpham_model');
    }
    function Get_data(){
     $kq=$this->dslsp->LoaiSP_find('','');
     $this->view('Masterlayout',[
         'page'=>'Danhsachloaisanpham_view',
         'dulieu'=>$kq
     ]);
    }
    function TimkiemLoaiSP(){
     if(isset($_POST['btnTimkiem'])){
          $maloai=$_POST['txtMaloai'];
          $tenloai=$_POST['txtTenloai'];
          $kq=$this->dslsp->LoaiSP_find($maloai,$tenloai);
          $this->view('Masterlayout',[
              'page'=>'Danhsachloaisanpham_view',
              'dulieu'=>$kq,
              'maloai'=>$maloai,
              'tenloai'=>$tenloai
          ]);
      }
    }
    function XoaLoaiSP($maloai){
        $kq=$this->dslsp->LoaiSP_del($maloai);
        if($kq){
            echo '<script type="text/javascript">alert("Xóa thành công!")</script>';
        }
        else{
            echo '<script type="text/javascript">alert("Xóa thất bại!")</script>';
        }
        $this->view('Masterlayout',[
            'page'=>'Danhsachloaisanpham_view',
            'dulieu'=>$this->dslsp->LoaiSP_find('','')
        ]);

    }

    function SuaLoaiSP($maloai){
        $this->view('Masterlayout',[
            'page'=>'Loaisanphamsua_view',
            'dulieu'=>$this->dslsp->LoaiSP_find($maloai,'')
        ]);
    }

}
?>