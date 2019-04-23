<!-- This will show all the information on the chosen film. 
=======================================================================-->
<?php 
    include('include/topTemp.php'); 
    
    require('include/db.php');

    require('class/film.class.php');
    require('class/genre.class.php');
    require('class/role.class.php');
    require('class/actor.class.php');


    $chosenFilm = $db->query("SELECT * FROM film WHERE id = ".$db->real_escape_string($_GET['id']))->fetch_object('Film');
    // get all from the genre table with the desired id
    $convertGenre = $db->query("SELECT * FROM genre WHERE id = $chosenFilm->genre_id");
    // get the genre from film with the id from the genre database
    $converted = $convertGenre->fetch_object('genre');
    // convert the genre id to the id from genre
    $getRoles = $db->query("SELECT * FROM role WHERE film_id = $chosenFilm->id");
    // get all roles where the film id is the same as the chosen film.
?>
<h2><?=$chosenFilm->name?> </h2>

<div class="row">    
    <div class="col-sm-2">
        <img src="http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/<?php echo($chosenFilm->id);  ?>_medium.jpg">
    </div>
    
    <div class="col-sm-9">
    
       <div>
            <dl class="dl-horizontal">
                <dt>Genre</dt>
                    <dd><?=$converted->name?></dd>
                <dt>Description</dt>
                    <dd><?=$chosenFilm->description?></dd>      <!-- Print all of the information about the film -->
                <dt>Runtime</dt>
                    <dd><?=$chosenFilm->runtime?></dd>
                <dt>Director</dt>
                    <dd><?=$chosenFilm->director?></dd>
                <dt>DVD Release</dt>
                    <dd><?=$chosenFilm->dvdRelease?></dd>
                <dt>Classification</dt>
                    <dd><?=$chosenFilm->classification?></dd>
           </dl>    
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>

<div class="row">
    <div class="col-sm-4">
        <h4>Actors - Characters</h4>
        <?php
         while($showRole = $getRoles->fetch_object('role')): 
             $getActor = $db->query("SELECT * FROM actor WHERE id = $showRole->actor_id");
                $showActor = $getActor->fetch_object('actor');
                // links the actor class with role class based on id
            echo("<pre>");
                echo('<table>');
                    echo('<tbody>');
                        echo('<tr>');
                            echo('<td>');
                                echo('Actor- ');
                            echo('</td>');
                            echo('<td>');
                                echo($showActor->name); // Print the Name from the actor class
                            echo('</td>');
                        echo('</tr>');
                        echo('<tr>');
                            echo('<td>');
                                echo('Role- ');
                            echo('</td>');
                            echo('<td>');
                                echo($showRole->character);     // print character from the role class
                            echo('</td>');
                        echo('</tr>');
                    echo('</tbody>');					
                echo('</table>');
            echo("</pre>");
        endwhile; ?>
    </div>
</div>
<?php
    include('partials/reviews.php');        // print out 10 reviews
    include('partials/commentForm.php');    // get the form for the user to enter a review
    include('include/bottomTemp.php'); 
?>

