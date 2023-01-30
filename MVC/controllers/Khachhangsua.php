<?php
     class Khachhangsua extends controller{
          protected $kh;
          function __construct()
          {
              $this->kh=$this->model("Khachhang_Model");
          }
          function Get_data(){
              $this->view("Masterlayout",[
                  'page'=>"Khachhangsua_View"
              ]);
          }
          function Sua(){
              if(isset($_POST['btnLuu'])){
                  $makh=$_POST['txtMakh'];
                  $ht=$_POST['txtHoten'];
                  $ngs=$_POST['txtNgaysinh'];
                  $dt=$_POST['txtDienthoai'];
                  $email=$_POST['txtEmail'];
                  $dc=$_POST['txtDiachi'];
                  $kq=$this->kh->khachhang_update($makh,$ht,$ngs,$dt,$email,$dc);
                  if($kq){
                      echo '<script type="text/javascript">alert("Sửa thành công!")</script>';
               
                  }
                  else{
                      echo '<script type="text/javascript">alert("Sửa thất bại!")</script>';
                  }
                  $this->view("Masterlayout",[
                      'page'=>"Danhsachkhachhang_View",
                      'dulieu'=>$this -> kh -> Khachhang_find('', '')
               
                  ]);
              }
          }
      }
?>