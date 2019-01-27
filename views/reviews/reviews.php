<form action="/reviews/addreview" method="POST">
<input type="hidden" name="user_id" value="<?= $_SESSION['user_id'];?>">
    <div class="form-gropup review">
        <label for="">Отзыв:</label>
        <textarea  class="form-control"  rows="3" name="text" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';} ?>>
        </textarea>
        <div class="form-group radio">
        <label for="">Рейтинг: </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="1" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';} ?>>
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="2" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';} ?>>
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="3" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';} ?>>
                <label class="form-check-label" for="inlineRadio2">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="4" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';} ?>>
                <label class="form-check-label" for="inlineRadio2">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioViews" value="5" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';} ?>>
                <label class="form-check-label" for="inlineRadio2">5</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" <?php if(!isset($_SESSION['user_id'])){echo 'disabled';} ?>>Submit</button>
    </div>
    
</form>

<div class="views">
    <label for="">Все отзывы</label>
    <?php
        if(Message::has());
        echo '<div class="alert alert-'.Message::getType().'">'.Message::getText().'</div>';
    ?>
</div>