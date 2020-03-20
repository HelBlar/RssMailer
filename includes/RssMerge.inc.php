<?php
namespace includes;

class RssMerge extends Database
{
    public function merge($user){
        $dataShow = $this->getRssList($user);
        
       
        foreach ($dataShow as $data){
            
            $url= (string)$data['url'];
            $rss = @simplexml_load_file($url);
            foreach($rss->channel->item as $item) {
            echo '<h5>'. $item->title. '</h5><br>';
            echo '<div>'. $item->description. '</div><hr>';
            $content =( $content.' <h5>'. $item->title. '</h5><br><div>'. $item->description. '</div><hr> ');
           
        }
        $_SESSION['content']= '<html><head></head><body>'.$content.'</body></html>';
    }
    }
}
?>
     