<?php
require_once 'ihandelr.php';

class instagram implements Handler{
    private Handler $handelar;

    public function nextHandler(Handler $handler){
        $this->handelar=$handler;
    }
    public function handlelink( $video){
        if(stripos($video,"instagram")!==false){
            echo "i can handel it in instagram \n ";
        }else{
            echo "i can`t handel it in  in instagram \n" ;
            $this->handelar->handlelink($video);
        }

    }
}
?>