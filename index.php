<!-- Home page. Has a welcome message, carousel and random film
=======================================================================-->
<?php 
    include('include/topTemp.php');  

    require('include/db.php');
    require('class/film.class.php');
    
    $newest = $db->query("SELECT * FROM film ORDER BY dvdRelease DESC LIMIT 5"); // get 5 films that have the newest date
?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/corouselBackground.png" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">      <!-- First Slide/Welcome slide -->
                    <p>Welcome</p>
                    <p>Here is some of the latest films</p>
                    <p>available from Red Carpet Films</p>
                </div>
            </div>
        </div>
        <?php while($new = $newest->fetch_object('film')):?>
        <div class="item">
            <img src="images/corouselBackground.png" alt="Second slide">    <!-- Loop through the  5 films and add one for each slide-->
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="showFilm.php?id=<?=$new->id?>"> <img src="http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/<?php echo($new->id); ?>_medium.jpg"> </a>
                        </div>
                        <div class="col-sm-6">                                                     <!-- Display the image and name  -->
                            <p class="list-group-item-heading"><?=$new->name?></p>
                            <p class="list-group-item-text"><?=$new->dvdRelease?></p>
                        </div>
                    </div>   
                </div>
            </div>
        </div> 
        <?php endwhile; ?>  
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>           <!-- left hand button for last slide -->
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>          <!-- right hand button fro next slide -->    
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->



<div class="row">
    <div class="col-sm-8">
        <p>Welcome to Red Carpet Films. We are a new and evolving film rental company that find not better comfort that to supply our customers with their entertainment needs. </p>
        <p>This site is a showcase to what kind of film inventory we have and what range of films that you will be able to rent from us. You will be able to view the latest 
            films around, read reviews by real people as well as leaving your own review to guide the next customer along.</p>
    </div>
    
    
    <div class="col-sm-4"> <!-- random film col-->
        <!-- Random Film
        ============================================ -->
        <?php    
            $randomFilm = $db->query("SELECT * FROM film ORDER BY RAND()");
            $filmOfTheDay = $randomFilm->fetch_object('film');
        ?>
        <a href="showFilm.php?id=<?=$filmOfTheDay->id?>" class="list-group-item">
            <h3 class="text-center">Something Interesting.</h3>
            <div class="row">
                <div class="col-sm-7">
                    <img src="http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/<?php echo($filmOfTheDay->id);  ?>_medium.jpg">
                </div>
                <div class="col-sm-5">
                    <h4 class="list-group-item-text"><?=$filmOfTheDay->name?></h4>
                    <p class="list-group-item-text"><?=$filmOfTheDay->classification?></p>  
                </div>    
            </div>
        </a>
    </div> <!-- /.random film col-->
</div> <!-- /.row -->




<?php include('include/bottomTemp.php');  ?>