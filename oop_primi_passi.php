<?php

    class Movie {

        function __construct($_title, $_genre, $_year, $_original_language) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->original_language = $_original_language;
        }
        public function getMovieAge() {
            $tmp = date('Y');
            return $this->title . ' is ' . ($tmp - $this->year) . ' years old';
        }

        public function movieData($movie) {
            foreach($movie as $key => $value) {
                echo $key . ' : ' . $value . '<br>';
            }
        }
    }

    $iron_Man = new Movie('Iron Man', 'Azione', 2005, 'English','Tony Stark');
    $superMan = new Movie('Superman', 'Azione', 2004, 'English', 'Clark Kent');
    

    echo $iron_Man-> movieData($iron_Man);
    echo $iron_Man-> getMovieAge() . '<br>';
    echo '<hr>';
    echo $superMan-> movieData($superMan);
    echo $superMan-> getMovieAge() . '<br>';

?>