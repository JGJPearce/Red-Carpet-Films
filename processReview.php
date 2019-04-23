<?php
    require('include/topTemp.php');
    require('include/db.php');

    $id = $db->real_escape_string($_POST["id"]);                // Get each of the user inputs
	$film_id = $db->real_escape_string($_POST["film_id"]);        
	$reviewer = $db->real_escape_string($_POST["reviewer"]);
	$comment = $db->real_escape_string($_POST["comment"]);
	$liked = $db->real_escape_string($_POST["liked"]);

    // insert all of then form inputs onto the database
    $addReview = $db->query("INSERT INTO review (id, film_id, reviewer, comment, liked) VALUES ('$id', '$film_id', '$reviewer', '$comment', '$liked')");
    
    // Display the options that have been posted onto the database on the website 
    echo("<h2>Review successfull!</h2>");
    echo('<div class="table-responsive"><table class="table">');
        echo('<tbody>');
            echo('<tr>');
                echo('<td>');
                    echo('Your Name');
                echo('</td>');
                echo('<td>');
                    echo($_POST["reviewer"]);
                echo('</td>');
            echo('</tr>');
            echo('<tr>');
            echo('<td>');
                echo('Comment');
            echo('</td>');
            echo('<td>');
                echo($_POST["comment"]);
            echo('</td>');
            echo('</tr>');
                echo('<td>');
                    echo('Verdict');
                echo('</td>');
                echo('<td>');
                    echo($_POST["liked"]);
                echo('</td>');
            echo('</tr>');
        echo('</tbody>');					
    echo('</table></div>');
    // button to go back to film page
    echo('<a class="btn btn-default" href="'.$_SERVER['HTTP_REFERER'].'">Go back</a>');	

?>



