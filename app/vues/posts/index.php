<?php
/*-------------------------------------------------------
../app/vues/posts/index.php
Liste des posts
Variables disponibles $posts (tableau de tableaux indexés)
-----------------------------------------------------------*/

?>

<?php foreach ($posts as $post): ?>
<?php $date=strtotime($post['created_at']); ?>

      <article class="blog_item">
          <div class="blog_item_img">
              <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
              <a href="posts/<?php echo $post['id']; ?>/<?php echo \Noyau\Fonctions\slugify ($post['title']); ?>" class="blog_item_date">
                  <h3><?php echo date('d', $date); ?></h3>
                  <p><?php echo date('M', $date); ?></p>
              </a>
          </div>

          <div class="blog_details">
              <a class="d-inline-block" href="posts/<?php echo $post['id']; ?>/<?php echo \Noyau\Fonctions\slugify ($post['title']); ?>">
                  <h2><?php echo $post['title']; ?></h2>
              </a>
              <p><?php echo $post['content']; ?></p>
              <ul class="blog-info-link">
                  <li><a href="posts/<?php echo $post['id']; ?>/<?php echo \Noyau\Fonctions\slugify ($post['title']); ?>"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
              </ul>
          </div>
      </article>

<?php endforeach; ?>
