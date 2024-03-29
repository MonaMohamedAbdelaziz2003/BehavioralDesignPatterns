<?php
//////// receiver
class receiver{
    private $gitlog=[];
    public function log(){
        return $this->gitlog;
    }
    public function commit(){
         $this->gitlog[]='commit';
    }
    public function add(){
         $this->gitlog[]='add';
    }
    public function push(){
         $this->gitlog[]='push';
    }
    public function revert(){
         $this->gitlog[]='revert';
    }
}
?>