<?php
class Notification{
    
    public static $ERR_MESSAGE = "alert-danger";

    private $message;
    private $typeMessage;
    
    public function Notification ($type, $message) {
        $this->typeMessage = $type;
        $this->message = $message;
    }
    
    public function getType(){
        return $this->typeMessage;
    }
    
    public function getMessage(){
        return $this->message;
    }
}
?>