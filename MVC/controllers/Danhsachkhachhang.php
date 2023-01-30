<?php
     class Danhsachkhachhang extends controller{
          
          public $dskh;
          function __construct()
          {
               $this -> dskh = $this -> model("Khachhang_Model");
          }

          function Get_data(){
               $this -> view("masterlayout",[
                    'page' => "Danhsachkhachhang_View",
                    'dulieu' => $this -> dskh -> Khachhang_find('', '')
               ]);
          }

          function Timkiem(){
               if(isset($_POST['btnTimkiem'])){
                    $makhachhang = $_POST['txtMakhachhang'];
                    $hoten = $_POST['txtTenkhachhang'];
                    $dulieu = $this -> dskh -> Khachhang_find($makhachhang, $hoten);
                    $this->view('masterlayout',[
                         'page' => 'Danhsachkhachhang_View',
                         'dulieu' =>$dulieu,
                         'Makhachhang' => $makhachhang,
                         'Hoten' =>$hoten,
                    ]);
               }
          }

          function Xoa($makhachhang){
               $kq = $this -> dskh -> Khachhang_Delete($makhachhang);
               if($kq){
                    echo '<script type="text/javascript">alert("Xóa thành công!")</script>';
               } else{
                    echo '<script type="text/javascript">alert("Xóa thất bại")</script>';
               }
               $this->view('masterlayout',[
                    'page' => 'Danhsachkhachhang_View',
                    'dulieu' =>$this -> dskh -> Khachhang_find('','')
               ]);
          }

          function Sua($makhachhang){
               $this->view('masterlayout',[
                    'page' => 'Khachhangsua_View',
                    'dulieu' =>$this -> dskh -> Khachhang_find($makhachhang,'')
               ]); 
          }

     }

?>