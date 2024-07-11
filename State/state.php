<?php
// State
interface state{
    public function play(MediaPlayer $player);
    public function pause(MediaPlayer $player);
    public function stop(MediaPlayer $player);
}