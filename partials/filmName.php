<!-- THIS PARTIAL IS USED BY filmPage.php & allGenres.php 
=======================================================================-->
<?php echo("<pre>");  ?>        
    <a href="showFilm.php?id=<?=$showFilm->id?>"> <img src="http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/<?php echo($showFilm->id);  ?>_medium.jpg"> <!-- Medium image for the film -->
    <h4><?=$showFilm->name?></h4></a> <!-- get the name of the film -->
<?php echo("</pre>");  ?>
<br/>