<?php
class Card {
    public $id;
    public $image;
    public $isFlipped;
 
    public function __construct($id, $image) {
        $this->id = $id;
        $this->image = $image;
        $this->isFlipped = false;
    }
 
    public function flip() {
        $this->isFlipped = !$this->isFlipped;
    }
}