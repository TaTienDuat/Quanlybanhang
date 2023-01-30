<?php
class DanhsachNCC extends controller{
     public $dsncc;
     function __construct(){
          $this ->dsncc = $this ->model('DanhsachNCC_Model');
     }
     function Get_data(){
          $this ->view('Masterlayout',[
               'page' => 'DanhsachNCC_View'
          ]);
     }
     function TimkiemNCC(){
          if(isset($_POST['btnTimkiem'])){
               $mncc = $_POST['txtManhacungcap'];
               $tennc = $_POST['txtTennhacungcap'];
               $dulieu = $this->dsncc->Nhacungcap_Find($mncc,$tennc);
               $this->view('Masterlayout',[
                    'page' => 'DanhsachNCC_View',
                    'dulieu' =>$dulieu,
                    'mncc' => $mncc,
                    'tenncc' =>$tennc
               ]);
          }
     }
     
      function XoaNCC($mancc){
          $kq=$this->dsncc->Nhacungcap_Del($mancc);
          if($kq){
              echo '<script type="text/javascript">alert("Xóa thành công!")</script>'; 
          }
          else{
              echo '<script type="text/javascript">alert("Xóa không thành công!")</script>'; 
          }
          $dl=$this->dsncc->Nhacungcap_Find('','');
          $this->view('Masterlayout',[
              'page'=>'DanhsachNCC_view',
              'dulieu'=>$dl
          ]);
      }
      function NCC_Upd($mancc){
          $dl=$this->dsncc->Nhacungcap_Find($mancc,'');
              $this->view('Masterlayout',[
                  'page'=>'NhacungcapSua_View',
                  'dulieu'=>$dl
              ]);
      }
}
?>