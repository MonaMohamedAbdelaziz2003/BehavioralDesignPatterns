
<?php

require_once 'ihandelr.php';

class facebook implements Handler{
    
    private Handler $handelar;

    public function nextHandler(Handler $handler){
        $this->handelar=$handler;
    }
    public function handlelink( $video){
        if(stripos($video,"facebook")!==false){
            echo "i can handel it in facebook \n";
        }else{
            echo "i can`t handel it  in facebook i pass it to instagram\n";
            $this->handelar->handlelink($video);
        }

    }
}
?>