<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Posts</title>
    <link href="./dist/css/tabler.min.css?1668287865" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1668287865" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1668287865" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1668287865" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1668287865" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
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
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <?php foreach ($posts as $post) { ?>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><?= $post['title'] ?></h3>
                  </div>
                  <div class="card-body">
                    <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class=" active"></button>
                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class=""></button>
                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class=""></button>
                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="3" class=""></button>
                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="4" class=""></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" alt="" src="./static/photos/<?= $post['image'] ?>">
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
        
    <script src="./dist/js/tabler.min.js?1668287865" defer></script>
    <script src="./dist/js/demo.min.js?1668287865" defer></script>
  </body>
</html>