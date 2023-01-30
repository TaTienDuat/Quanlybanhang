<?php
class LoaisanphamSua extends controller{
    public $lsps;
    function __construct()
    {
        $this->lsps=$this->model('Loaisanpham_model');
    }
    function LoaiSP_Sua(){
        if(isset($_POST['btnLuu'])){
            $maloai=$_POST['txtMaloai'];
            $tenloai=$_POST['txtTenloai'];
            $ghichu=$_POST['txtGhichu'];
            $kq=$this->lsps->LoaiSP_upd($maloai,$tenloai,$ghichu);
            if($kq)
            echo '<script type="text/javascript">alert("Sửa thành công!")</script>';
            else
            echo '<script type="text/javascript">alert("Sửa thất bại!")</script>';  
            $this->view('Masterlayout',[
                'page'=>'Loaisanphamsua_view',
                'dulieu'=>$this->lsps->LoaiSP_find($maloai,'')
            ]);

        }
        if(isset($_POST['btnQuaylai'])){
          $this->view('Masterlayout',[
              'page'=>'Danhsachloaisanpham_view',
              'dulieu'=>$this->lsps->LoaiSP_find('','')
          ]);
      }
    }
}
?>