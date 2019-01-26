<?php
  if(Message::has()):
?>

<div class="alert alert-<?=Message::getType()?>"><?=Message::getText() ?></div>

<?php endif ?>

<div class="login">
    <form action="/user/login" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>