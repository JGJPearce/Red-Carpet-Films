      <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12">
                <h4>Enter a new Review</h4>
                <form class="form-horizontal" action="processReview.php" method="post" role="form">
                    <!-- Enter the Reviewers name -->
                    <div class="form-group">
                        <label for="reviewer" class="col-sm-3 control-label">Your name:-</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="reviewer" id="reviewer" required="required" />
                            </div>
                    </div>

                    <!-- Text area for the reviewers comment -->
                    <div class="form-group">
                        <label for="comment" class="col-sm-3 control-label">Your review:-</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="comment" id="comment" required="required"></textarea>
                            </div>
                    </div>

                    <!-- Radio button for Like/Dislike -->
                    <div class="form-group">
                        <label for="liked" class="col-sm-4 control-label">Did you like it:- </label>
                        <div class="col-sm-8">
                            <input type="radio" name="liked" id="liked" value="1" required> Yes</br>
                            <input type="radio" name="liked" id="liked" value="0" > No</br>
                            </br>
                        </div>
                    </div>        

                    <!-- create a new Id for this review -->
                    <input type="hidden" class="form-control" name="id" id="id">

                    <!-- Get the film Id from the film that was chosen -->
                    <input type="hidden" class="form-control" name="film_id" id="film_id" value="<?=$chosenFilm->id?>">

                    <!-- Submit button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>  <!-- ./ col -->
        </div>  <!-- ./ row -->
    </div>  <!-- end right had col -->
</div> <!-- End row at the top of review.php -->
    

