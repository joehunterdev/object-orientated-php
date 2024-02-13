<?php 
class Comment {
 
    public $text;
    public $userId;

    function __construct($text,$userId){

        $this->text = $text; 
        $this->userId = $userId; 

    }

    public function formatText(){
        return "<p>".$this->text."</p>";
    }

}

?>