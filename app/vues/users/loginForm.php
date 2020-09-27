<?php
/*-------------------------------------------------------
../app/vues/users/loginForm.php
Liste des users
Variables disponibles
-----------------------------------------------------------*/

?>
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">
        <?php foreach ($categories as $categorie): ?>


          <li>
              <a href="#" class="d-flex">
                <p><?php echo $categorie['name']; ?></p>
                <p><?php echo $categorie['id']; ?></p>
              </a>
          </li>

        <?php endforeach; ?>
    </ul>
</aside>
