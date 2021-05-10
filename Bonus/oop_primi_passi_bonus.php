<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-Primi Passi</title>
</head>
<body>

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

}

$iron_Man = new Movie('Iron Man', 'Azione', 2005, 'English');
$superMan = new Movie('Superman', 'Azione', 2004, 'English');
?>

<div class="movies">
    <div class="movie">
    <?php foreach($iron_Man as $movie => $value) { ?>
        <p><?php echo $movie . ' : ' . $value  ?></p>
    <?php } ?>
        <p><?php echo $iron_Man->getMovieAge() ?></p>
    </div>
    <hr>
    
    <div class="movie">
    <?php foreach($superMan as $movie => $value) { ?>
        <p><?php echo $movie . ' : ' . $value  ?></p>
    <?php } ?>
        <p><?php echo $superMan->getMovieAge() ?></p>
    </div>
    <hr>
</div>

</body>
</html>
