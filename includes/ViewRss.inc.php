<?php
namespace includes;

class ViewRss extends Database
{

    public function viewRssList($user){
        $dataShow = $this->getRssList($user);
        
        foreach ($dataShow as $data){ 
        echo('<div class="list"> <a href="control/delete.con.php?id='.$data["id"].'">DELETE</a> '. $data["url"].' </div><hr><br>'); 
        }
        
      
    }}
    

?>