<?php
/*---------------------------------------------------------
../app/vues/template/partials/_main.php
--------------------------------------------------------------*/
 ?>
<main>
  <!--================Blog Area =================-->
  <section class="blog_area section-padding">
      <div class="container">
          <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                      <?php echo $content; ?>
                </div>
            </div>
              <div class="col-lg-4">
                  <?php include '../app/vues/template/partials/_aside.php' ?>
              </div>
          </div>
      </div>
  </section>
</main>
