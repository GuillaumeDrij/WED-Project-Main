<?php
/*-------------------------------------------------------
../app/vues/users/loginForm.php
Liste des users
Variables disponibles
-----------------------------------------------------------*/

?>

<div class="">
  <h2>Connexion au backoffice</h2>
  <!-- <?php if (isset($_GET['error']) and $_GET['error'] =='1'): ?> -->
    <form action="users/login/submit" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Login</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </form>
</div>