<?php
    class Movie {
        //attributi della classe
        private $title;      //string
        public $director;   //string
        public $year;       //int
        public $genre;      //string- arr di string
        public $vote;       //float

        //costruttore 
        public function __construct(
            //si può specificare il tipo di dato aspettato prima della variabile
            string $title,
            string $director,
            int $year,
            string $genre,
            float $vote
        ) {
            $this->setTitle($title);
            $this->director = $director;
            $this->year = $year;
            $this->genre = $genre;
            $this->vote = $vote;
        }
        //setter
        public function setTitle($title) {
            //controlli qui
            if(is_string($title) && strlen($title) > 0) {
                $this->title = $title;
            }
            else {
                //qualcosa
            }
        }
        //getter
        public function getTitle() {
            return $this->title;
        }

        public function movieInfo() {
            return $this->title.' Diretto da: '.$this->director.' anno: '.$this->year;
        }
        public function moreMovieInfo() {
            return 'Genere: '.$this->genre.' Valutazione: '.$this->vote;
        }
    }