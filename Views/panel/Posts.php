<!doctype html>
<html lang="en">
  <head>
    <title>Posts</title>
    <?php include "init/style.php"; ?>
  </head>
  <body >

  <?php include "includes/header.php"; ?>
  
      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Posts
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <?php foreach ($posts as $post) { ?>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <a href="/posts/<?= $post['id'] ?>"><h3 class="card-title"><?= $post['title'] ?></h3></a>
                  </div>
                  <div class="card-body">
                    <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" alt="" src="../static/photos/<?= $post['image'] ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>

    <?php include "includes/footer.php"; ?>
        
    <?php include "init/script.php"; ?>
  </body>
</html>