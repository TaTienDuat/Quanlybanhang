<?php
class nhacungcap extends controller{
    public $ncc;
    function __construct()
    {
        $this->ncc = $this->model('nhacungcap_model');
    }
    function Get_data(){
        $this->view('masterlayout', [
            'page' => 'nhacungcap_view'
        ]);
    }
    function themmoiNCC(){
        if(isset($_POST['btnLuu'])){
            echo '';
            $mncc = $_POST['txtManhacungcap'];
            $tenncc = $_POST['txtTennhacungcap'];
            $dt = $_POST['txtDienthoai'];
            $dc = $_POST['txtDiachi'];
            $kq=$this->ncc->nhacungcap_Ins($mncc,$tenncc,$dt,$dc);
            $this->view('masterlayout', [
                'page' => 'nhacungcap_view'
            ]);
        }
    }
    function checktrungMNCC($mncc){
        $sql="SELECT * FROM nhacungcap WHERE Manhacungcap='$mncc'";
        $dt=mysqli_query($this->con,$sql); //$dt là một mảng: nếu mảng có dữ liệu có nghĩa là trùng mã và số dòng trong mảng >0
        $kq=false;
        if(mysqli_fetch_row($dt)>0){
            $kq=true;
        }
        return $kq;  //$kq mà có giá trị false: nghĩa là không trùng còn $kq=true thì trùng mã ncc
    }
}
?>