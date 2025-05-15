<?php
include "includes/db.php";
include "includes/layout/header.php";


if (isset($_GET['id'])) {
  $category_id = $_GET['id'];
  $stmt = $connection->query("SELECT posts.*,categories.title AS category_title
                              FROM posts,categories
                              WHERE posts.category_id=categories.id AND posts.category_id=$category_id                            
                             ");
  $posts = $stmt->fetchAll();
} else {
  $stmt = $connection->query("SELECT posts.*,categories.title AS category_title
                              FROM posts,categories
                              WHERE posts.category_id=categories.id
                              ORDER BY id DESC
                              LIMIT 10
                              ");
  $posts = $stmt->fetchAll();
}
// var_dump($posts);



// var_dump($posts);

?>

<main>
  <!-- Slider Section -->
  <?php include "includes/layout/slider.php" ?>

  <!-- Content Section -->
  <section class="mt-4">
    <div class="row">
      <!-- Posts Content -->
      <div class="col-lg-8">
        <div class="row g-3">
          <?php foreach ($posts as $post): ?>
            <div class="col-sm-6">
              <div class="card postCard">
                <img src="./assets/images/<?= $post['image'] ?>" class="card-img-top" alt="post-image" />
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h5 class="card-title fw-bold"><?= $post['title'] ?></h5>
                    <div>
                      <span class="badge text-bg-secondary"><?= $post['category_title'] ?></span>
                    </div>
                  </div>
                  <p class="card-text text-secondary pt-3">
                    <?= substr($post['body'], 0, 300) . "..." ?>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="single.html" class="btn btn-sm btn-dark">مشاهده</a>

                    <p class="fs-7 mb-0">نویسنده : <?= $post['author'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>

      <!-- Sidebar Section -->
      <?php include "includes/layout/sidebar.php" ?>

    </div>
  </section>
</main>

<!-- Footer Section -->
<?php include "includes/layout/footer.php" ?>