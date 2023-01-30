<?php
class nhacungcap_model extends ConnectDB{
    function nhacungcap_Ins($mncc,$tenncc,$dt,$dc){
        $sql="INSERT INTO nhacungcap VALUE('$mncc','$tenncc','$dt','$dc')";
        return mysqli_query($this->con, $sql);
    }
   
}
?>