<?php
/*-------------------------------------------------------
../app/vues/users/loginForm.php
Liste des users
Variables disponibles
-----------------------------------------------------------*/

?>

<div class="">
  <h2>Connexion au backoffice</h2>
    <form action="users/login/submit" method="post" >
      <div class="form-group">
        <label for="exampleInputEmail1">Login</label>
        <input type="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login" name="login">
        <small id="emailHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
