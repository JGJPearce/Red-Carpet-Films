<?php
    $navArray = array(
        'index' => 'Home',
        'allFilms' => 'Films',
        'allGenres' => "Genre's"
    );
?> 
<!-- Static navbar -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">   
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>         
            
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <?php // iterate through each nav item - also use the array key as $key ?>
                  <?php foreach($navArray as $key => $nav) : ?>
                    <?php
                    // see if the string exists in the server script name
                    // this is the name and path from the root URL of the file
                    // if the current page is the item in the loop, add class="active"
                    if(strstr($_SERVER['SCRIPT_NAME'], $key)) $active = 'class="active"';
                    else $active = '';
                    ?>

                    <? // create the list item adding in the class="active" if needed, the href and link name ?>
                    <li <?=$active; ?>><a href="<?=$key; ?>.php"><?=$nav; ?></a></li>
                  <?php endforeach; ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>