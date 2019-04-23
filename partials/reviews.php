<?php
    require('class/review.class.php');
    $reviews = $db->query("SELECT * FROM review WHERE film_id = $chosenFilm->id ORDER BY id DESC LIMIT 10");    // Limit number of reviews to 10 and order them by larges id at the top
    
    echo("<h2 class='text-center'>Reviews</h2>");
    
    echo("<div class='row'>");      // this ends on commentForm.php
        echo("<div class='col-sm-6'>");
            echo("<h4>User Reviews</h4>");
            while($review = $reviews->fetch_object('review')):     // loop through the review table
                echo("<pre>");
                    echo("Name: ");
                    echo($review->reviewer);    // add the reveiwer name
                        echo("<br/>");
                    echo("Comment: ");
                    echo($review->comment); // add the review
                        echo("<br/>");
                    echo("Verdict: ");
                    if ($review->liked){        //change outcome based on like/dislike
                        echo("<span class='glyphicon glyphicon-thumbs-up'>");   // Like glyph
                        echo("-Liked");
                    }else{ 
                        echo("<span class='glyphicon glyphicon-thumbs-down'>"); // dislike glyph
                        echo("-Disliked");
                    }
                echo("</pre>");       
            endwhile; 
        echo("</div>");     // End left hand side col
?>



