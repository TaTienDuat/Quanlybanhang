<?php
class ConnectDB{
    public $con;
    protected $server='localhost';
    protected $user='root';
    protected $pass='';
    protected $db='quanlybanhang';
    function __construct(){
        $this->con=mysqli_connect($this->server,$this->user,$this->pass,$this->db);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}
?>