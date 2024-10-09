<?php
    //classe
    class Movie {
        //attributi della classe
        public $title;
        public $director;
        public $year;
        public $genre;
        public $vote;

        //costruttore 
        public function __construct($title, $director, $year, $genre, $vote) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->genre = $genre;
            $this->vote = $vote;
        }
        // public function qualcosa() {
        //     return qualcosa qui
        // }
    }

    //istanze -- fornire i relativi valori dichiarati nel costruttore
    $movieOne = new Movie("Lo Hobbit: Un viaggio inaspettato", "Peter Jackson", 2012, "Fantasy", 4);
    $movieTwo = new Movie("I cento passi", "Marco Tullio Giordana", 2000, "Storia, Dramma", 5);

    var_dump($movieOne);
    var_dump($movieTwo);


