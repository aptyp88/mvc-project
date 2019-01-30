
<?php if(isset($_SESSION['user_id'])): ?>
<form action="/reviews/addreview" method="POST">
<input type="hidden" name="user_id" value="<?= $_SESSION['user_id'];?>">
    <div class="form-gropup form-review">
        <label for="">Отзыв:</label>
        <textarea  class="form-control"  rows="3" name="text" >
        </textarea>
        <div class="form-group radio">
        <label for="">Рейтинг: </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="1" >
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="2" >
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="3" >
                <label class="form-check-label" for="inlineRadio2">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="4" >
                <label class="form-check-label" for="inlineRadio2">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" checked value="5" >
                <label class="form-check-label" for="inlineRadio2">5</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
    
</form>
<?php endif ?>

<div class="views">
    <label for="">Все отзывы</label>
    <?php
        // print_r($reviews);
        if(Message::has());
        echo '<div class="alert alert-'.Message::getType().'">'.Message::getText().'</div>';
        for($i=0;$i<count($reviews);$i++)
        {
            $review = $reviews[$i];

            echo '<div class="view">
                <p>'.$review -> text.'<p>
                <hr>
                <label>Отзыв пользователя: '.$review -> email.'</label>
            </div>';
        }
    ?>


    <!-- <?php
        if(Message::has());
        echo '<div class="alert alert-'.Message::getType().'">'.Message::getText().'</div>';
        foreach($reviews as $review)
        {
            echo '<div class="view">
                <p>'.$review -> text.'<p>
                <hr>
                <label>Отзыв пользователя: '.$review -> user_id.'</label>
            </div>';
        }
    ?> -->
    

    

    
    
</div>