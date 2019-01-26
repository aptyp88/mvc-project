<?php
  if(Message::has()):
?>

<div class="alert alert-<?=Message::getType()?>"><?=Message::getText() ?></div>

<?php endif ?>

<div class="register">
<form method="POST" action="/user/register">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass">
    </div>  
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>