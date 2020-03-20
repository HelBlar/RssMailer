<?php
namespace includes;

class Database extends DbConf
{
   
  public  function getRssList($user){
        $sql = "SELECT  * FROM rss WHERE mail LIKE '".$user."'";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        
        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }else{
            echo "Nothing to do...";
        }
    }
    public function insert($mail,$url){
        $sql = "INSERT INTO rss VALUES ('','$mail','$url')";
        $this->connect()->query($sql);
        echo "zapytanie wykonane poprawnie";
        header('location:../index.php');
    }
    
    public function del($id){
        $sql="DELETE FROM rss WHERE id='$id'";
        $this->connect()->query($sql);
        header('location:../index.php');
    }
    
}

?>