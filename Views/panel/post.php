<!doctype html>
<html lang="en">
  <head>
    <title>Post <?= $id ?></title>
    <?php include 'init/style.php'; ?>
  </head>
  <body >

    <?php include 'includes/header.php'; ?>

      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Post <?= $id ?>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row">
              <div class="col-sm-6">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img src="../static/photos/<?= $post['image'] ?>" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div>
                        <div><?= $post['title'] ?></div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          <?= $post['viewcount'] ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-sm">
                    <h3>Content :</h3>
                    <?= $post['content'] ?>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <?php include 'includes/footer.php'; ?>

    <?php include 'init/script.php'; ?>
  </body>
</html>