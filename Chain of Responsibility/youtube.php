<?php
require_once 'ihandelr.php';
class youtube implements Handler{
    private Handler $handelar;

    public function nextHandler(Handler $handler){
        $this->handelar=$handler;

    }
    public function handlelink( $video){
        if(stripos($video,"youtube")!==false){
            echo "ican handel it in youtube\n";
        }else{
            echo "i can`t handel it in youtube  i pass it to facebook\n";
            $this->handelar->handlelink($video);
        }
    }
}
?>