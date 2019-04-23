<!-- This will list every genre available and 4 films from each genre. 
=======================================================================-->
<?php 
    include('include/topTemp.php');  
    
    // get the database connection
    require('include/db.php');
    require('class/film.class.php');
    require('class/genre.class.php');

// Get everything from genre 
    $genres = $db->query("SELECT * FROM genre");
    
// get 4 films from each genre
    $getActAdvent = $db->query("SELECT * FROM film WHERE genre_id = 1 LIMIT 4");
    $getAni = $db->query("SELECT * FROM film WHERE genre_id = 2 LIMIT 4");
    $getDram = $db->query("SELECT * FROM film WHERE genre_id = 3 LIMIT 4");
    $getDoc = $db->query("SELECT * FROM film WHERE genre_id = 4 LIMIT 4");
    $getMysSu = $db->query("SELECT * FROM film WHERE genre_id = 5 LIMIT 4");
    $getCom = $db->query("SELECT * FROM film WHERE genre_id = 6 LIMIT 4");
    $getWest = $db->query("SELECT * FROM film WHERE genre_id = 7 LIMIT 4");
    $getSciFic = $db->query("SELECT * FROM film WHERE genre_id = 8 LIMIT 4");
    $getHorror = $db->query("SELECT * FROM film WHERE genre_id = 9 LIMIT 4");
    $getArt = $db->query("SELECT * FROM film WHERE genre_id = 10 LIMIT 4");
    $getSpace = $db->query("SELECT * FROM film WHERE genre_id = 11 LIMIT 4");
?>

    <?php
         while($genre = $genres->fetch_object('genre')):?>      
            <div class="col-sm-3">
                <a href="showGenre.php?id=<?=$genre->id?>"><h4 class="list-group-item-heading">-<?=$genre->name?>-</h4></a>
            </div>
    <?php    endwhile; 
    ?>
    <!-- loop through the genres and print all of their names and link them to their respective page -->
    </br></br><br/></br>

<!-- Link title of genre to its page -->
 <a href="showGenre.php?id=1"><h3 class="text-center">Action & Adventure</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getActAdvent->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=2"><h3 class="text-center">Animation</h3></a>
    <div class="row">
        <?php while($showFilm = $getAni->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<!-- Link title of genre to its page -->
<a href="showGenre.php?id=3"><h3 class="text-center">Drama</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getDram->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=4"><h3 class="text-center">Documentary</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getDoc->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=5"><h3 class="text-center">Mystery & Suspense</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getMysSu->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=6"><h3 class="text-center">Comedy</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getCom->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=7"><h3 class="text-center">Western</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getWest->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=8"><h3 class="text-center">Science Fiction & Fantasy</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getSciFic->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=9"><h3 class="text-center">Horror</h3></a>
    <div class="row">
        <?php while($showFilm = $getHorror->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=10"><h3 class="text-center">Art House & International</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getArt->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<!-- Link title of genre to its page -->
<a href="showGenre.php?id=11"><h3 class="text-center">Space Opera</h3></a>
    <div class="row">
        <!-- show the 4 films -->
        <?php while($showFilm = $getSpace->fetch_object('film')):?>
            <div class="col-sm-3">
                <?php  include("partials/filmName.php");?>
            </div>  
        <?php  endwhile;  ?>
    </div>

<br/><br/>
		

<?php include('include/bottomTemp.php'); ?>