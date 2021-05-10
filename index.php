<?php

class Movie {
    public $title;
    public $actor;
    public $rating;
    public $review = "undefined";

    function __construct($_title, $_rating)
    {
        $this->title = $_title;
        $this->rating = $_rating;
    }

    public function getReview()
    {
        if ($this->rating >= 4.5) {
           return $this->review = "Extremely Positive";
        }
        
        elseif ($this->rating >= 3 && $this->rating < 4.5) {
            return $this->review = "Positive";
        }
        
        else {
            return $this->review = "Nothing special";            
        }

    }

}


$blues = new Movie("The Blues Brothers", 4.8);
$brave = new Movie("Braveheart", 4.2);
$dolittle = new Movie("Dolittle", 2.2);

/* $blues->title = "The Blues Brothers"; */
$blues->actor = "John Belushi";
/* $blues->rating = 4.8; */
$blues->getReview();
var_dump($blues);

/* $brave->title = "Braveheart"; */
$brave->actor = "Mel Gibson";
/* $brave->rating = 4.2; */
$brave->getReview();
var_dump($brave);

/* $dolittle->title = "Dolittle"; */
$dolittle->actor = "Robert Downing Jr";
/* $dolittle->rating = 2.2; */
$dolittle->getReview();
var_dump($dolittle);

