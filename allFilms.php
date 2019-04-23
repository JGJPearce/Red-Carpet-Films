<!--  This page will show every film that is in the database.
=======================================================-->

<?php 
    include('include/topTemp.php'); 
    
    require('include/db.php');

    require('class/film.class.php');

    $films = $db->query("SELECT * FROM film ORDER BY name");  // get everything on the film table

?>

<h1>Films A to Z</h1>
    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        
        <div class="row">
        
        <?php
            $counter = 0;
            while($showFilm = $films->fetch_object('film')):    // Loop through the films
                $counter++;             // add one to the counter
                if ($counter == 4){      // once there is 3 films in a row... end the row and start a new one
                    $counter = 0;
                    echo("</div>");
                    echo("<div class='row'>");
                } else {                            // otherwise continue on with the printing of the films
                    echo("<div class='col-sm-4'>");
                    include('partials/filmName.php');
                    echo("</div>");
                }
             endwhile; ?>  
        </div>
    </div>
    <div class="col-sm-1"></div>
</div> 


<?php include('include/bottomTemp.php');  ?>