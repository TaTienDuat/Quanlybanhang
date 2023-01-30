<?php
class NhacungcapSua extends controller{
    public $nccsua;
    function __construct()
    {
        $this->nccsua=$this->model('DanhsachNCC_Model');
    }
    function SuaNCC(){
        if(isset($_POST['btnLuu'])){
            $mncc=$_POST['txtManhacungcap'];
            $tenncc=$_POST['txtTennhacungcap'];
            $dt=$_POST['txtDienthoai'];
            $dc=$_POST['txtDiachi'];
            $kq=$this->nccsua->Nhacungcap_Upd($mncc,$tenncc,$dt,$dc);
            if($kq)
                echo '<script type="text/javascript">alert("Sửa thành công!")</script>'; 
            else
                echo '<script type="text/javascript">alert("Sửa thất bại!")</script>';
            $this->view('Masterlayout',[
                'page'=>'NhacungcapSua_view',
                'dulieu'=>$this->nccsua->Nhacungcap_Find($mncc,'')
            ]); 
        }
        if(isset($_POST['btnBack'])){
            $this->view('Masterlayout',[
                'page'=>'DanhsachNCC_view',
                'dulieu'=>$this->nccsua->Nhacungcap_Find('','')
            ]);  
        }
    }
}
?>