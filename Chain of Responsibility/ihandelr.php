<?php
interface Handler {
    public function nextHandler(Handler $Handler);
    public function handlelink( $video);
}
?>