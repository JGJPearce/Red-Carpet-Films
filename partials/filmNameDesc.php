<!-- THIS PARTIAL IS USED BY ShowGenre.php 
=======================================================================-->
<div class="row">
    <div class="col-sm-3">
        <a href="showFilm.php?id=<?=$showFilm->id?>"> <img src="http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/<?php echo($showFilm->id);  ?>_medium.jpg"> </a><!-- get a medium image for film -->
    </div>
    <div class="col-sm-9">    
        <h3><?=$showFilm->name?></h3>       <!-- Get name and description of the film -->
        <p><?=$showFilm->description?></p>
    </div>
</div>
<br/><br/>