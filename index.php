<?php
    //classe
    require_once __DIR__.'/models/movie.php';

    //istanze -- fornire i relativi valori dichiarati nel costruttore
    $movieOne = new Movie(
        "Lo Hobbit: Un viaggio inaspettato",
        "Peter Jackson",
        2012,
        "Fantasy",
        4
    );
    $movieTwo = new Movie(
        "I cento passi",
        "Marco Tullio Giordana",
        2000,
        "Storia/ Dramma",
        5
    );

    var_dump($movieOne->getTitle());
    // var_dump($movieOne);
    // var_dump($movieTwo);
    echo $movieOne->movieInfo();
    echo $movieOne->moreMovieInfo();
    echo '<br/>';

    var_dump($movieTwo->getTitle());

    echo $movieTwo->movieInfo();
    echo $movieTwo->moreMovieInfo();
    


