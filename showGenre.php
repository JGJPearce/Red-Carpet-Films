<!-- This page will show all films that have the same genre as the one chosen on the 
        previous page (allGenres.php)
=======================================================================-->
<?php 
    include('include/topTemp.php'); 
    
    require('include/db.php');
    require('class/genre.class.php');
    require('class/film.class.php');

    $chosenGenre = $db->query("SELECT * FROM genre WHERE id = ".$db->real_escape_string($_GET['id']))->fetch_object('genre'); 
    // get all from the genre table with the desired id
    $showFilmForGenre = $db->query("SELECT * FROM film WHERE genre_id = $chosenGenre->id");
    // get all films that have the same genre 
?>
<h2><?=$chosenGenre->name?> </h2>
<!-- show genre name -->
<div class="row">  
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
            <?php
                while($showFilm = $showFilmForGenre->fetch_object('film')):
                    echo("<pre>");
                    include("partials/filmNameDesc.php");   // loop through all films for this genre
                    echo("</pre>");
                endwhile; 
            ?>
    </div>
    <div class="col-sm-1"></div>
</div>
<?php include('include/bottomTemp.php');  ?>

